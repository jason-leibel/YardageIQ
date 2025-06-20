const fs = require('fs');
const https = require('https');

const coveragePath = 'coverage.xml';
const badgePath = 'public/badges/coverage.svg';

if (!fs.existsSync(coveragePath)) {
    console.error(`Coverage file not found: ${coveragePath}`);
    process.exit(1);
}

const xml = fs.readFileSync(coveragePath, 'utf8');
const match = xml.match(/<metrics[^>]*statements="(\d+)"[^>]*coveredstatements="(\d+)"/);
if (!match) {
    console.error('Unable to parse coverage percentage');
    process.exit(1);
}
const total = parseInt(match[1], 10);
const covered = parseInt(match[2], 10);
const percentage = total === 0 ? 0 : Math.round((covered / total) * 100);

let color = 'red';
if (percentage >= 90) color = 'brightgreen';
else if (percentage >= 75) color = 'yellow';

const url = `https://img.shields.io/badge/coverage-${percentage}%25-${color}.svg`;

https.get(url, res => {
    if (res.statusCode !== 200) {
        console.error(`Failed to download badge: ${res.statusCode}`);
        res.resume();
        process.exit(1);
    }
    const file = fs.createWriteStream(badgePath);
    res.pipe(file);
    file.on('finish', () => file.close());
}).on('error', err => {
    console.error(err);
    process.exit(1);
});
