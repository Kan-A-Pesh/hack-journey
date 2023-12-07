(async () => {
    require("dotenv").config();

    const port = process.env.PORT || 80;
    const robotCookie = process.env.ROBOT_COOKIE || "J'ai un cookie qui prouve que je suis un r0b0t!";

    // Initialize the Puppeteer browser
    const puppeteer = require("puppeteer");
    const browser = await puppeteer.launch({
        headless: true,
        executablePath: "/usr/bin/google-chrome",
        args: ["--no-sandbox", "--disable-setuid-sandbox"],
    });

    // Initialize the Express app
    const express = require("express");
    const app = express();

    const bodyParser = require("body-parser");
    app.use(bodyParser.urlencoded({ extended: true }));

    // Create the main route
    app.get("/", async (req, res) => {
        if (!req.query.check) {
            res.send("Vous devez spécifier un paramètre check");
            return;
        }

        // Run a crawl on the given URL
        const url = req.query.check;
        const urlHost = new URL(url).host;

        const page = await browser.newPage();

        // Add bot cookies to the page
        // robot=J'ai un cookie qui prouve que je suis un r0b0t!
        await page.setExtraHTTPHeaders({
            Robot: `${robotCookie}`,
        });
        // Go to the target URL with redirections
        await page.goto(url, { waitUntil: "networkidle2" });

        // Wait for the page to be loaded
        await page.waitForSelector("body");

        // Get the page content
        const content = await page.content();

        // Send the page content to the client
        res.send(content);

        // Close the page
        await page.close();
    });

    // Start the Express app
    app.listen(port, () => {
        console.log(`App listening on port ${port}`);
    });
})();
