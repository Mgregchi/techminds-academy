**Lesson 1: Introduction to Java**—crafted specifically for absolute beginners with a focus on web development.

---

# ✅ **Lesson 1: Introduction to Java**

---

## 🧠 What is Java?

**Java** is a high-level, object-oriented programming language created by Sun Microsystems (now owned by Oracle). It is:
- Platform-independent (“write once, run anywhere” using the JVM)
- Widely used for backend development, Android apps, and enterprise software
- The foundation for many large-scale web applications

---

## 🌐 Why Java for Web Development?

- **Strong backend capabilities** (Servlets, Spring Boot, REST APIs)
- Huge ecosystem of tools, frameworks, and libraries
- Secure and scalable
- Used in banks, e-commerce sites, enterprise-grade apps

---

## 🛠 Setting Up the Environment

### 1. **Install the JDK (Java Development Kit)**
- Go to [https://jdk.java.net](https://jdk.java.net) or [https://www.oracle.com/java](https://www.oracle.com/java)
- Download the latest version (e.g., JDK 21)
- Set your system’s `JAVA_HOME` path (optional but useful)

### 2. **Install an IDE (Integrated Development Environment)**
Choose any:
- IntelliJ IDEA (recommended)
- Eclipse
- VS Code with Java extensions

### 3. **Check Installation**
Open a terminal and run:
```bash
java -version
javac -version
```

If installed correctly, you should see version info.

---

## 💻 Your First Java Program

Let’s write a simple program to print a message:

### File: `HelloWorld.java`

```java
public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello, Web World!");
    }
}
```

### 🔧 How to Compile and Run
```bash
javac HelloWorld.java
java HelloWorld
```

---

## 🛠 Mini Project: **Interactive Greeting**

### Goal:
Prompt the user for their name and display a personalized greeting.

### File: `GreetingApp.java`

```java
import java.util.Scanner;

public class GreetingApp {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("What's your name? ");
        String name = input.nextLine();

        System.out.println("Welcome, " + name + "! Let's learn Java together 🚀");

        input.close();
    }
}
```

### How to Run:
1. Save as `GreetingApp.java`
2. Compile: `javac GreetingApp.java`
3. Run: `java GreetingApp`

---

## 📝 Summary

- Java is a powerful, web-friendly language.
- You’ve learned how to write and run your first Java program.
- You built a small interactive console app.
- You’re now ready to dive into **core Java concepts** in Lesson 2.

---

**Lesson 2: Core Java Concepts**, where we’ll build your foundation in Java—focusing on syntax, variables, control flow, and OOP—essential for building any real-world Java (or web) application.

---

# ✅ **Lesson 2: Core Java Concepts**

---

## 1. **Variables & Data Types**

### Java is statically typed. You must declare the type of variable before using it.

```java
int age = 25;
double price = 19.99;
char grade = 'A';
String name = "Alice";
boolean isLoggedIn = true;
```

---

## 2. **Operators**

### Arithmetic:
```java
int sum = 10 + 5;     // 15
int product = 4 * 3;  // 12
```

### Comparison:
```java
System.out.println(5 > 3);     // true
System.out.println(10 == 5);   // false
```

### Logical:
```java
boolean result = (5 > 3) && (10 < 20); // true
```

---

## 3. **Control Flow**

### If / Else:

```java
int age = 18;
if (age >= 18) {
    System.out.println("You're an adult!");
} else {
    System.out.println("You're underage.");
}
```

### Switch:

```java
int day = 2;
switch (day) {
    case 1: System.out.println("Monday"); break;
    case 2: System.out.println("Tuesday"); break;
    default: System.out.println("Another day");
}
```

---

## 4. **Loops**

### For Loop:
```java
for (int i = 1; i <= 5; i++) {
    System.out.println("Count: " + i);
}
```

### While Loop:
```java
int x = 0;
while (x < 3) {
    System.out.println("x is " + x);
    x++;
}
```

---

## 5. **Arrays and Collections**

### Arrays:
```java
String[] fruits = {"Apple", "Banana", "Cherry"};
System.out.println(fruits[1]); // Banana
```

### ArrayList:
```java
import java.util.ArrayList;

ArrayList<String> names = new ArrayList<>();
names.add("John");
names.add("Jane");

System.out.println(names.get(0)); // John
```

---

## 6. **Methods (Functions)**

```java
public class Greet {
    static void sayHello(String name) {
        System.out.println("Hello, " + name + "!");
    }

    public static void main(String[] args) {
        sayHello("Zara");
    }
}
```

---

## 7. **Object-Oriented Programming (OOP)**

### Class & Object:
```java
class Car {
    String brand;

    void honk() {
        System.out.println(brand + " says Beep!");
    }
}

public class Main {
    public static void main(String[] args) {
        Car myCar = new Car();
        myCar.brand = "Toyota";
        myCar.honk();
    }
}
```

---

## 🛠 Mini Project: **Student Grade Checker**

Create a program that:
- Takes student name and score
- Grades them based on score range
- Uses functions and if-else

### Sample Output:
```
Enter student name: Sam
Enter student score: 82
Sam's grade is: B
```

### Code:
```java
import java.util.Scanner;

public class GradeChecker {
    static String getGrade(int score) {
        if (score >= 90) return "A";
        else if (score >= 80) return "B";
        else if (score >= 70) return "C";
        else if (score >= 60) return "D";
        else return "F";
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter student name: ");
        String name = sc.nextLine();
        System.out.print("Enter student score: ");
        int score = sc.nextInt();

        String grade = getGrade(score);
        System.out.println(name + "'s grade is: " + grade);
    }
}
```

---

## 📝 Summary

- You now understand Java’s basic building blocks.
- You’ve used conditionals, loops, methods, arrays, and OOP.
- You’re ready for **web-focused Java**, starting with **Servlets and JSP**.

---

**Lesson 3**, where you’ll learn how Java powers the web using **Servlets**—the building blocks of Java web applications. We’ll also set up your first simple Java-based server.

---

# ✅ **Lesson 3: Java and the Web – Servlets & Web Server Setup**

---

## 🧠 What is a Servlet?

A **Servlet** is a Java class used to handle requests and responses on a web server. It runs on a **Servlet container** (like Apache Tomcat) and is part of the **Java EE (Jakarta EE)** ecosystem.

- Acts like a controller in MVC
- Handles HTTP requests (`GET`, `POST`, etc.)
- Generates HTML or JSON responses

---

## ⚙️ Prerequisites

- JDK installed ✅
- IDE (IntelliJ/Eclipse) ✅
- **Apache Tomcat**: Download from [https://tomcat.apache.org](https://tomcat.apache.org) and extract.

---

## 🗂 Project Structure

We’ll use the classic directory layout for a Java web project:

```
MyWebApp/
├── src/
│   └── HelloServlet.java
├── web/
│   └── WEB-INF/
│       └── web.xml
│   └── index.html
```

---

## ✏️ Step 1: Create Your First Servlet

### `HelloServlet.java`

```java
import java.io.*;
import jakarta.servlet.*;
import jakarta.servlet.http.*;

public class HelloServlet extends HttpServlet {
    public void doGet(HttpServletRequest req, HttpServletResponse res)
            throws IOException, ServletException {
        res.setContentType("text/html");
        PrintWriter out = res.getWriter();
        out.println("<h1>Hello from Java Servlet!</h1>");
    }
}
```

> If you're using older libraries, import from `javax.servlet.*`

---

## 🛠 Step 2: Configure `web.xml`

This tells Tomcat what to do when someone visits a URL path.

### `web/WEB-INF/web.xml`

```xml
<web-app xmlns="http://jakarta.ee/xml/ns/jakartaee"
         version="5.0">
  <servlet>
    <servlet-name>HelloServlet</servlet-name>
    <servlet-class>HelloServlet</servlet-class>
  </servlet>

  <servlet-mapping>
    <servlet-name>HelloServlet</servlet-name>
    <url-pattern>/hello</url-pattern>
  </servlet-mapping>
</web-app>
```

---

## 🌐 Step 3: Add `index.html`

```html
<!DOCTYPE html>
<html>
<head>
  <title>Java Web App</title>
</head>
<body>
  <h2>Welcome to My Java Web App</h2>
  <a href="hello">Click here to greet</a>
</body>
</html>
```

---

## 🚀 Step 4: Deploy to Tomcat

1. Package your app into a `.war` file (e.g., `MyWebApp.war`)
2. Drop it into the `webapps/` folder inside Tomcat
3. Start Tomcat (`bin/startup.sh` or `startup.bat`)
4. Visit `http://localhost:8080/MyWebApp`

You should see the homepage and be able to access the Servlet!

---

## 📝 Summary

- You wrote and configured your first Java Servlet
- You learned how Java handles web requests on a server
- You served HTML using Java code

---

## 💡 Mini Challenge: Servlet Feedback Form

Add a form to `index.html`:
```html
<form action="hello" method="get">
  <input type="text" name="name" placeholder="Enter your name" />
  <button type="submit">Submit</button>
</form>
```

Update `HelloServlet` to:
```java
String name = req.getParameter("name");
out.println("<h1>Hello, " + name + "!</h1>");
```

---


# ✅ **Lesson 4: JavaServer Pages (JSP) and Dynamic Content**

---

## 🧠 What is JSP?

**JavaServer Pages (JSP)** allow you to embed Java code directly into your HTML. JSPs are compiled into Servlets by the server and executed just like any other Servlet.

### Benefits:
- Easier HTML integration than raw Servlets
- Ideal for views (while Servlets handle logic)
- Part of the MVC architecture

---

## 📦 JSP Project Structure

You’ll add `.jsp` files directly into your `web/` folder.

```
MyWebApp/
├── src/
│   └── HelloServlet.java
├── web/
│   ├── index.jsp
│   ├── greet.jsp
│   └── WEB-INF/
│       └── web.xml
```

---

## ✏️ Step 1: Create `index.jsp`

```jsp
<!DOCTYPE html>
<html>
<head>
  <title>JSP Welcome</title>
</head>
<body>
  <h2>Welcome to JSP Page</h2>
  <form action="greet.jsp" method="get">
    <label>Enter your name:</label>
    <input type="text" name="name" />
    <button type="submit">Greet</button>
  </form>
</body>
</html>
```

---

## 🖥 Step 2: Create `greet.jsp`

```jsp
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<!DOCTYPE html>
<html>
<head>
  <title>Greeting Page</title>
</head>
<body>
  <h1>
    Hello, <%= request.getParameter("name") %>!
  </h1>
</body>
</html>
```

### 🔍 What's going on here?

- `<%@ ... %>` – JSP directives (used for page configuration)
- `<%= %>` – Outputs the result of a Java expression (in this case, the user's name)

---

## 📌 Mixing HTML and Java

You can also include conditions and loops in JSP:

```jsp
<% 
  String name = request.getParameter("name");
  if(name != null && !name.isEmpty()) {
%>
    <h2>Hello, <%= name %>!</h2>
<% 
  } else { 
%>
    <h2>No name entered!</h2>
<%
  }
%>
```

---

## 📝 Summary

- JSP makes building dynamic web pages easier than raw Servlets.
- We used `request.getParameter` to retrieve form data.
- JSP files are best used for **views** while Servlets handle **logic**.

---

## 🧪 Mini Challenge: JSP Calculator

Create a simple calculator form in `calculator.jsp`:
```jsp
<form method="get" action="calculator.jsp">
  <input type="number" name="a" />
  <select name="op">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <input type="number" name="b" />
  <button type="submit">Calculate</button>
</form>
```

Then calculate and display the result below:
```jsp
<%
  String op = request.getParameter("op");
  try {
    double a = Double.parseDouble(request.getParameter("a"));
    double b = Double.parseDouble(request.getParameter("b"));
    double result = 0;

    switch(op) {
      case "+": result = a + b; break;
      case "-": result = a - b; break;
      case "*": result = a * b; break;
      case "/": result = a / b; break;
    }
%>
    <p>Result: <%= result %></p>
<%
  } catch (Exception e) {
%>
    <p>Enter valid numbers!</p>
<%
  }
%>
```

---

