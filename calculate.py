#!/usr/bin/env python3
import sys
import math

# This script calculates: Result = ((sqrt(c^3) / a) * 10) + b

# Get values from command line arguments
if len(sys.argv) == 4:
    try:
        a = float(sys.argv[1])
        b = float(sys.argv[2])
        c = float(sys.argv[3])
    except ValueError:
        # Default values if conversion fails
        a = 1
        b = 1
        c = 1
else:
    # Default values if not enough arguments
    a = 1
    b = 1
    c = 1

# Perform calculations
c_cubed = c ** 3
square_root = math.sqrt(c_cubed)
division = square_root / a
multiplication = division * 10
result = multiplication + b

# Output the result as HTML
print(f"""
<div class="result">
    <p>Given values:</p>
    <ul>
        <li>a = {a}</li>
        <li>b = {b}</li>
        <li>c = {c}</li>
    </ul>
    <p>Calculation steps:</p>
    <ol>
        <li>c³ = {c}³ = {c_cubed}</li>
        <li>√(c³) = √{c_cubed} = {square_root}</li>
        <li>√(c³) / a = {square_root} / {a} = {division}</li>
        <li>(√(c³) / a) * 10 = {division} * 10 = {multiplication}</li>
        <li>((√(c³) / a) * 10) + b = {multiplication} + {b} = {result}</li>
    </ol>
    <h2>Final Result: {result}</h2>
</div>
""")