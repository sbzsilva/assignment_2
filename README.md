# Dynamic Content Calculator

![Python](https://img.shields.io/badge/python-3.6%2B-blue)
![PHP](https://img.shields.io/badge/php-7.0%2B-blue)
![License](https://img.shields.io/badge/license-MIT-green)

A web-based calculator that computes mathematical expressions using a combination of PHP frontend and Python backend. The calculator computes the result of the formula: ((√(c³) / a) * 10) + b

## Table of Contents
- [Description](#description)
- [How It Works](#how-it-works)
- [Formula](#formula)
- [Installation](#installation)
- [Usage](#usage)
- [Example](#example)
- [License](#license)

## Description

This project is a dynamic content calculator that demonstrates integration between PHP and Python. The web interface is built with PHP, which collects user input and calls a Python script to perform the mathematical calculations. The result is then displayed back to the user with detailed steps showing how the calculation was performed.

## How It Works

1. The user enters values for variables a, b, and c in the web form
2. PHP processes the form submission
3. PHP executes the Python script [calculate.py](file:///c%3A/Users/ssilva/college/assignment_2/calculate.py) with the provided values as command-line arguments
4. The Python script performs the mathematical calculations and generates HTML output
5. PHP captures the output and displays it to the user

## Formula

The calculator computes the following mathematical expression:

```
Result = ((√(c³) / a) * 10) + b
```

Where:
- a: Divisor in the expression
- b: Value added to the final result
- c: Base value that is first cubed, then square rooted

## Installation

1. Make sure you have a web server with PHP support (like Apache with mod_php) installed
2. Ensure Python 3 is installed on the system
3. Place the files in your web server's document root
4. Make sure the Python script has execution permissions:
   ```bash
   chmod +x calculate.py
   ```
5. Update the path to the Python script in [index.php](file:///c%3A/Users/ssilva/college/assignment_2/index.php) if needed (currently set to `/var/www/html/calculate.py`)

## Usage

1. Open the index.php file in your web browser
2. Enter values for a, b, and c in the input fields
3. Click the "Calculate" button
4. View the detailed calculation steps and final result

## Example

If you enter:
- a = 2
- b = 5
- c = 3

The calculation will be:
1. c³ = 3³ = 27
2. √(c³) = √27 ≈ 5.196
3. √(c³) / a = 5.196 / 2 ≈ 2.598
4. (√(c³) / a) * 10 = 2.598 * 10 ≈ 25.98
5. ((√(c³) / a) * 10) + b = 25.98 + 5 = 30.98

Final Result: 30.98

## License

This project is licensed under the MIT License - see the LICENSE file for details.