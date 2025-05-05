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
**Lesson 6: User Authentication with Sessions (Login System)** to help you understand how to manage user sessions and authentication in Java web applications.

---

# **Lesson 6: User Authentication with Sessions**

### 🧠 What You Will Learn

* How to handle login forms.
* Validate user credentials.
* Manage user sessions with `HttpSession`.
* Protect private pages.
* Implement logout functionality.

---

## ✅ Step 1: Setup Project Structure

```
/jakarta-login
 ┣ /src
 ┃ ┣ /main
 ┃ ┃ ┣ /java/com/example/auth
 ┃ ┃ ┃ ┣ LoginServlet.java
 ┃ ┃ ┃ ┣ DashboardServlet.java
 ┃ ┃ ┃ ┗ LogoutServlet.java
 ┃ ┃ ┣ /webapp
 ┃ ┃ ┃ ┣ login.html
 ┃ ┃ ┃ ┣ dashboard.jsp
 ┃ ┃ ┃ ┗ logout.jsp
 ┣ pom.xml
```

---

## 🧾 Step 2: Login HTML Form (`login.html`)

```html
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h2>Login</h2>
  <form action="login" method="post">
    <label>Username:</label><br>
    <input type="text" name="username" required><br>
    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
  </form>
</body>
</html>
```

---

## 🔐 Step 3: Login Servlet (`LoginServlet.java`)

```java
package com.example.auth;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.*;

import java.io.IOException;

@WebServlet("/login")
public class LoginServlet extends HttpServlet {
    private static final String USER = "admin";
    private static final String PASS = "password123";

    @Override
    protected void doPost(HttpServletRequest req, HttpServletResponse res)
            throws ServletException, IOException {

        String username = req.getParameter("username");
        String password = req.getParameter("password");

        if (USER.equals(username) && PASS.equals(password)) {
            HttpSession session = req.getSession();
            session.setAttribute("user", username);
            res.sendRedirect("dashboard");
        } else {
            res.getWriter().println("Login Failed. <a href='login.html'>Try again</a>");
        }
    }
}
```

---

## 📄 Step 4: Dashboard Servlet (`DashboardServlet.java`)

```java
package com.example.auth;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.*;

import java.io.IOException;

@WebServlet("/dashboard")
public class DashboardServlet extends HttpServlet {
    @Override
    protected void doGet(HttpServletRequest req, HttpServletResponse res)
            throws ServletException, IOException {

        HttpSession session = req.getSession(false);

        if (session == null || session.getAttribute("user") == null) {
            res.sendRedirect("login.html");
        } else {
            req.getRequestDispatcher("/dashboard.jsp").forward(req, res);
        }
    }
}
```

---

## 📜 Step 5: Dashboard JSP (`dashboard.jsp`)

```jsp
<%@ page contentType="text/html;charset=UTF-8" %>
<%
  String user = (String) session.getAttribute("user");
%>
<html>
<head><title>Dashboard</title></head>
<body>
  <h2>Welcome, <%= user %></h2>
  <a href="logout">Logout</a>
</body>
</html>
```

---

## 🚪 Step 6: Logout Servlet (`LogoutServlet.java`)

```java
package com.example.auth;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.*;

import java.io.IOException;

@WebServlet("/logout")
public class LogoutServlet extends HttpServlet {
    @Override
    protected void doGet(HttpServletRequest req, HttpServletResponse res)
            throws ServletException, IOException {
        HttpSession session = req.getSession(false);
        if (session != null) session.invalidate();
        res.getWriter().println("Logged out. <a href='login.html'>Login again</a>");
    }
}
```

---

## 🛠️ Build & Run

* Ensure you're using **Jakarta EE 10** or newer dependencies.
* Deploy on a **Tomcat 10+** server (which supports `jakarta.servlet`).
* Access via: `http://localhost:8080/jakarta-login/login.html`

---

## 🧪 Try It Out!

1. Go to `/login.html`
2. Enter: `admin` / `password123`
3. If correct, redirected to `dashboard`
4. Try accessing `dashboard` without login — it should redirect to login.
5. Logout clears session.

---

**Lesson 7: JSP Tag Libraries (JSTL)**—a crucial topic for building dynamic Java web applications more efficiently with clean, readable JSP code.

---

# **Lesson 7: JSP Tag Libraries (JSTL)**

### 🧠 What You Will Learn

* What JSTL is and why it’s useful
* How to include JSTL in your project
* Core JSTL tags: loops, conditionals, and more
* Practical examples using JSTL with Jakarta EE

---

## 🔍 What is JSTL?

**JSTL (Jakarta Standard Tag Library)** is a set of tags that helps you avoid writing Java code directly inside your JSP pages. Instead, you use clean, XML-like tags for logic like loops, conditionals, and formatting.

---

## 📦 Step 1: Add JSTL to Your Project

If you're using Maven:

```xml
<dependency>
  <groupId>jakarta.servlet.jsp.jstl</groupId>
  <artifactId>jakarta.servlet.jsp.jstl-api</artifactId>
  <version>3.0.0</version>
</dependency>
<dependency>
  <groupId>org.glassfish.web</groupId>
  <artifactId>jakarta.servlet.jsp.jstl</artifactId>
  <version>3.0.1</version>
</dependency>
```

> Ensure you're using **Tomcat 10+** for Jakarta EE compatibility.

---

## 🔧 Step 2: Enable JSTL in Your JSP

At the top of your `.jsp` file:

```jsp
<%@ taglib uri="https://jakarta.ee/jsp/jstl/core" prefix="c" %>
```

---

## 🔁 JSTL Core Tag Examples

### 1. **Loop through a List**

```jsp
<c:forEach var="user" items="${users}">
  <p>${user}</p>
</c:forEach>
```

### 2. **Conditionals**

```jsp
<c:if test="${not empty users}">
  <p>Users available</p>
</c:if>
```

### 3. **Choose / When / Otherwise**

```jsp
<c:choose>
  <c:when test="${user.role == 'admin'}">
    <p>Admin Access</p>
  </c:when>
  <c:otherwise>
    <p>Standard User</p>
  </c:otherwise>
</c:choose>
```

### 4. **Set a Variable**

```jsp
<c:set var="greeting" value="Welcome back!" />
<p>${greeting}</p>
```

### 5. **Redirect**

```jsp
<c:redirect url="dashboard.jsp" />
```

---

## 📂 Practical Example: Display Users

**Servlet Code:**

```java
List<String> users = List.of("Alice", "Bob", "Charlie");
req.setAttribute("users", users);
req.getRequestDispatcher("/users.jsp").forward(req, res);
```

**users.jsp:**

```jsp
<%@ taglib uri="https://jakarta.ee/jsp/jstl/core" prefix="c" %>

<html>
<body>
<h2>User List</h2>
<ul>
  <c:forEach var="u" items="${users}">
    <li>${u}</li>
  </c:forEach>
</ul>
</body>
</html>
```

---

## 💡 Why Use JSTL?

* Clean separation of logic and presentation
* Safer and more readable than scriptlets (`<% %>`)
* Maintained as part of Jakarta EE

---

## ✅ Summary

* JSTL makes JSP cleaner and more maintainable.
* Use `c:forEach`, `c:if`, `c:set`, etc., for logic in JSP.
* JSTL works best with data passed from Servlets or EL (Expression Language).

---

# **Lesson 8: Connecting to a Database (JDBC + Servlet)**

### 🧠 What You Will Learn

* How to connect your Jakarta EE web app to a database using JDBC
* How to fetch data and display it on a JSP page
* How to safely use SQL with prepared statements
* Simple login or user listing example using JDBC + Servlet

---

## 🛠 Requirements

* Java 17+ (or latest)
* Jakarta EE libraries
* Tomcat 10+
* MySQL (or any SQL DB)
* MySQL JDBC Driver (e.g. `mysql-connector-j`)

### 👉 Maven Dependency for MySQL

```xml
<dependency>
  <groupId>com.mysql</groupId>
  <artifactId>mysql-connector-j</artifactId>
  <version>8.0.33</version>
</dependency>
```

---

## 1️⃣ Step-by-Step: Setting up JDBC Connection

### Database Setup:

```sql
CREATE DATABASE webapp;
USE webapp;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255)
);

INSERT INTO users (username, password) VALUES ('admin', '12345');
```

---

## 2️⃣ Create a Utility Class for Connection

**`DBUtil.java`**

```java
package com.example.utils;

import java.sql.Connection;
import java.sql.DriverManager;

public class DBUtil {
    private static final String URL = "jdbc:mysql://localhost:3306/webapp";
    private static final String USER = "root";
    private static final String PASSWORD = "";

    public static Connection getConnection() throws Exception {
        Class.forName("com.mysql.cj.jdbc.Driver");
        return DriverManager.getConnection(URL, USER, PASSWORD);
    }
}
```

---

## 3️⃣ Servlet to Fetch Data from DB

**`UserListServlet.java`**

```java
package com.example.servlets;

import com.example.utils.DBUtil;
import jakarta.servlet.*;
import jakarta.servlet.http.*;
import jakarta.servlet.annotation.*;

import java.io.IOException;
import java.sql.*;
import java.util.*;

@WebServlet("/users")
public class UserListServlet extends HttpServlet {
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        List<String> users = new ArrayList<>();

        try (Connection conn = DBUtil.getConnection()) {
            String sql = "SELECT username FROM users";
            PreparedStatement stmt = conn.prepareStatement(sql);
            ResultSet rs = stmt.executeQuery();

            while (rs.next()) {
                users.add(rs.getString("username"));
            }

            request.setAttribute("users", users);
            request.getRequestDispatcher("/users.jsp").forward(request, response);
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
```

---

## 4️⃣ JSP Page to Display Users

**`users.jsp`**

```jsp
<%@ taglib uri="https://jakarta.ee/jsp/jstl/core" prefix="c" %>
<html>
<head><title>All Users</title></head>
<body>
<h2>Registered Users</h2>
<ul>
  <c:forEach var="u" items="${users}">
    <li>${u}</li>
  </c:forEach>
</ul>
</body>
</html>
```

---

## ✅ Best Practices

* Always use **prepared statements** to avoid SQL injection.
* Keep DB credentials in environment variables or a config file.
* Use try-with-resources to auto-close connections.
* Avoid writing DB logic directly in JSP.

---

## 🔄 Extension Idea: Login System

You can use similar JDBC code to build a login system:

* Accept username & password from a form
* Use `SELECT * FROM users WHERE username=? AND password=?`
* If a match is found, log the user in (store in session)

Let me know if you'd like to build this login system as a hands-on project.

---

# **Lesson 9: Building a CRUD App (Create, Read, Update, Delete)**

### 🧠 What You Will Learn

* How to implement full CRUD functionality in a Jakarta EE web app
* Using Servlets for logic, JSP for views, and JDBC for database interaction
* Structuring a simple MVC pattern (Model-View-Controller)

---

## 🗂 Project Structure

```
/src
  /com.example.models      → Java model classes
  /com.example.servlets    → Servlets for CRUD
  /com.example.utils       → DBUtil class
/webapp
  /views                   → JSP files
```

---

## 🧱 1. Create the Database and Table

```sql
CREATE TABLE products (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100),
  price DOUBLE
);
```

---

## 🔁 2. Model Class

**`Product.java`**

```java
package com.example.models;

public class Product {
    private int id;
    private String name;
    private double price;

    // Constructors
    public Product() {}

    public Product(int id, String name, double price) {
        this.id = id;
        this.name = name;
        this.price = price;
    }

    // Getters and Setters
    public int getId() { return id; }
    public void setId(int id) { this.id = id; }

    public String getName() { return name; }
    public void setName(String name) { this.name = name; }

    public double getPrice() { return price; }
    public void setPrice(double price) { this.price = price; }
}
```

---

## ⚙️ 3. Utility: Database Connection

(Same as previous lesson)

---

## 📋 4. Product List Servlet

**`ProductListServlet.java`**

```java
@WebServlet("/products")
public class ProductListServlet extends HttpServlet {
    protected void doGet(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException {
        List<Product> products = new ArrayList<>();
        try (Connection conn = DBUtil.getConnection()) {
            String sql = "SELECT * FROM products";
            PreparedStatement stmt = conn.prepareStatement(sql);
            ResultSet rs = stmt.executeQuery();
            while (rs.next()) {
                products.add(new Product(
                    rs.getInt("id"),
                    rs.getString("name"),
                    rs.getDouble("price")
                ));
            }
            req.setAttribute("products", products);
            req.getRequestDispatcher("/views/list.jsp").forward(req, res);
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
```

---

## 🖊️ 5. Add Product Servlet (Create)

**`AddProductServlet.java`**

```java
@WebServlet("/add-product")
public class AddProductServlet extends HttpServlet {
    protected void doPost(HttpServletRequest req, HttpServletResponse res) throws IOException {
        String name = req.getParameter("name");
        double price = Double.parseDouble(req.getParameter("price"));

        try (Connection conn = DBUtil.getConnection()) {
            String sql = "INSERT INTO products (name, price) VALUES (?, ?)";
            PreparedStatement stmt = conn.prepareStatement(sql);
            stmt.setString(1, name);
            stmt.setDouble(2, price);
            stmt.executeUpdate();
        } catch (Exception e) {
            e.printStackTrace();
        }

        res.sendRedirect("products");
    }
}
```

---

## ✏️ 6. Update Product Servlet

**`UpdateProductServlet.java`**

```java
@WebServlet("/update-product")
public class UpdateProductServlet extends HttpServlet {
    protected void doPost(HttpServletRequest req, HttpServletResponse res) throws IOException {
        int id = Integer.parseInt(req.getParameter("id"));
        String name = req.getParameter("name");
        double price = Double.parseDouble(req.getParameter("price"));

        try (Connection conn = DBUtil.getConnection()) {
            String sql = "UPDATE products SET name=?, price=? WHERE id=?";
            PreparedStatement stmt = conn.prepareStatement(sql);
            stmt.setString(1, name);
            stmt.setDouble(2, price);
            stmt.setInt(3, id);
            stmt.executeUpdate();
        } catch (Exception e) {
            e.printStackTrace();
        }

        res.sendRedirect("products");
    }
}
```

---

## ❌ 7. Delete Product Servlet

**`DeleteProductServlet.java`**

```java
@WebServlet("/delete-product")
public class DeleteProductServlet extends HttpServlet {
    protected void doGet(HttpServletRequest req, HttpServletResponse res) throws IOException {
        int id = Integer.parseInt(req.getParameter("id"));

        try (Connection conn = DBUtil.getConnection()) {
            String sql = "DELETE FROM products WHERE id=?";
            PreparedStatement stmt = conn.prepareStatement(sql);
            stmt.setInt(1, id);
            stmt.executeUpdate();
        } catch (Exception e) {
            e.printStackTrace();
        }

        res.sendRedirect("products");
    }
}
```

---

## 🧑‍💻 8. JSP: Product List with Actions

**`list.jsp`**

```jsp
<%@ taglib uri="https://jakarta.ee/jsp/jstl/core" prefix="c" %>
<html>
<head><title>Products</title></head>
<body>
  <h2>Product List</h2>
  <table border="1">
    <tr><th>ID</th><th>Name</th><th>Price</th><th>Actions</th></tr>
    <c:forEach var="p" items="${products}">
      <tr>
        <td>${p.id}</td>
        <td>${p.name}</td>
        <td>${p.price}</td>
        <td>
          <form method="post" action="update-product">
            <input type="hidden" name="id" value="${p.id}" />
            <input type="text" name="name" value="${p.name}" />
            <input type="number" step="0.01" name="price" value="${p.price}" />
            <button>Update</button>
          </form>
          <form method="get" action="delete-product" style="display:inline;">
            <input type="hidden" name="id" value="${p.id}" />
            <button>Delete</button>
          </form>
        </td>
      </tr>
    </c:forEach>
  </table>

  <h3>Add Product</h3>
  <form method="post" action="add-product">
    Name: <input name="name" required />
    Price: <input type="number" name="price" step="0.01" required />
    <button>Add</button>
  </form>
</body>
</html>
```

---

## 🧠 Summary

* **Create:** Add form with `INSERT`
* **Read:** Display via `SELECT`
* **Update:** Edit inline with `UPDATE`
* **Delete:** Action button with `DELETE`

---


# **Lesson 10: MVC Pattern and Code Organization Best Practices**

---

### 🧠 What You Will Learn

* What is MVC (Model-View-Controller) and why it's important
* How to structure a Jakarta EE web project using MVC
* How to refactor code from our CRUD app for better maintainability

---

## 🔍 What is MVC?

**MVC (Model-View-Controller)** is a design pattern that separates the application into three main components:

| Component      | Responsibility                                                                   |
| -------------- | -------------------------------------------------------------------------------- |
| **Model**      | Represents data and business logic (e.g., `Product.java`, DAO)                   |
| **View**       | UI representation (e.g., `JSP` files)                                            |
| **Controller** | Handles user requests and communicates between model and view (e.g., `Servlets`) |

This pattern improves code organization, reusability, and testability.

---

## 📁 Recommended Project Structure

```
/src
 └── com.example
      ├── controller         → Servlets (Controller)
      ├── model              → POJO + DAO (Model)
      └── util               → Utility classes (DBUtil)
/webapp
 └── views                  → JSPs (View)
```

---

## 🛠 Step-by-Step Refactoring

### 1. **Move Database Logic to DAO Layer**

**`ProductDAO.java`**

```java
package com.example.model;

import java.sql.*;
import java.util.*;
import com.example.util.DBUtil;

public class ProductDAO {

    public List<Product> getAllProducts() {
        List<Product> products = new ArrayList<>();
        try (Connection conn = DBUtil.getConnection()) {
            PreparedStatement stmt = conn.prepareStatement("SELECT * FROM products");
            ResultSet rs = stmt.executeQuery();
            while (rs.next()) {
                products.add(new Product(
                    rs.getInt("id"),
                    rs.getString("name"),
                    rs.getDouble("price")
                ));
            }
        } catch (Exception e) { e.printStackTrace(); }
        return products;
    }

    public void addProduct(Product p) {
        try (Connection conn = DBUtil.getConnection()) {
            PreparedStatement stmt = conn.prepareStatement("INSERT INTO products (name, price) VALUES (?, ?)");
            stmt.setString(1, p.getName());
            stmt.setDouble(2, p.getPrice());
            stmt.executeUpdate();
        } catch (Exception e) { e.printStackTrace(); }
    }

    public void updateProduct(Product p) {
        try (Connection conn = DBUtil.getConnection()) {
            PreparedStatement stmt = conn.prepareStatement("UPDATE products SET name=?, price=? WHERE id=?");
            stmt.setString(1, p.getName());
            stmt.setDouble(2, p.getPrice());
            stmt.setInt(3, p.getId());
            stmt.executeUpdate();
        } catch (Exception e) { e.printStackTrace(); }
    }

    public void deleteProduct(int id) {
        try (Connection conn = DBUtil.getConnection()) {
            PreparedStatement stmt = conn.prepareStatement("DELETE FROM products WHERE id=?");
            stmt.setInt(1, id);
            stmt.executeUpdate();
        } catch (Exception e) { e.printStackTrace(); }
    }
}
```

---

### 2. **Update Servlets (Controller Layer)**

**`ProductListServlet.java`**

```java
@WebServlet("/products")
public class ProductListServlet extends HttpServlet {
    protected void doGet(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException {
        ProductDAO dao = new ProductDAO();
        List<Product> products = dao.getAllProducts();
        req.setAttribute("products", products);
        req.getRequestDispatcher("/views/list.jsp").forward(req, res);
    }
}
```

**`AddProductServlet.java`**

```java
@WebServlet("/add-product")
public class AddProductServlet extends HttpServlet {
    protected void doPost(HttpServletRequest req, HttpServletResponse res) throws IOException {
        ProductDAO dao = new ProductDAO();
        Product p = new Product();
        p.setName(req.getParameter("name"));
        p.setPrice(Double.parseDouble(req.getParameter("price")));
        dao.addProduct(p);
        res.sendRedirect("products");
    }
}
```

(Similar changes for `UpdateProductServlet` and `DeleteProductServlet`)

---

### 3. **JSP Files Stay the Same (View Layer)**

JSPs still handle all UI rendering using data passed via `request.setAttribute(...)`.

---

## 🧠 Summary

* You learned how to implement MVC using Jakarta EE
* Refactored your CRUD app to separate logic (Model), UI (View), and request handling (Controller)
* Set up a maintainable project structure for future scalability

---


# **Lesson 11: REST API with Jakarta EE (JSON Response)**

---

### 🧠 What You Will Learn

* What a REST API is and how it works
* How to expose JSON endpoints using Jakarta EE
* How to build a basic API for your product CRUD app
* How to test your API using tools like Postman or a browser

---

## 📘 What is a REST API?

**REST (Representational State Transfer)** is a web architecture style that uses HTTP requests to perform CRUD operations on resources. REST APIs typically return **JSON** or **XML**, with JSON being the standard for web and mobile apps.

| HTTP Verb | Action | Description          |
| --------- | ------ | -------------------- |
| GET       | Read   | Fetch data           |
| POST      | Create | Add new resource     |
| PUT       | Update | Modify existing data |
| DELETE    | Delete | Remove data          |

---

## 🔧 Setup for REST in Jakarta EE

1. Add dependency (if using Maven):

```xml
<dependency>
  <groupId>jakarta.json</groupId>
  <artifactId>jakarta.json-api</artifactId>
  <version>2.1.1</version>
</dependency>
```

2. We'll use **Servlets** to return **JSON manually**, since Jakarta EE doesn’t have JAX-RS by default in all servers like Tomcat.

---

## 🔁 Create a JSON Response for Products

**Product.java (Model)**

```java
public class Product {
    private int id;
    private String name;
    private double price;

    // constructors, getters, and setters
}
```

**ProductDAO.java**
(Use same DAO from previous lesson for fetching products.)

---

### 🚀 Create the API Servlet

**ProductApiServlet.java**

```java
package com.example.controller;

import com.example.model.Product;
import com.example.model.ProductDAO;

import jakarta.servlet.*;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.*;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;

@WebServlet("/api/products")
public class ProductApiServlet extends HttpServlet {
    protected void doGet(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException {
        res.setContentType("application/json");
        PrintWriter out = res.getWriter();

        ProductDAO dao = new ProductDAO();
        List<Product> products = dao.getAllProducts();

        StringBuilder json = new StringBuilder();
        json.append("[");
        for (int i = 0; i < products.size(); i++) {
            Product p = products.get(i);
            json.append("{")
                .append("\"id\":").append(p.getId()).append(",")
                .append("\"name\":\"").append(p.getName()).append("\",")
                .append("\"price\":").append(p.getPrice())
                .append("}");
            if (i < products.size() - 1) json.append(",");
        }
        json.append("]");

        out.print(json.toString());
        out.flush();
    }
}
```

---

### ✅ Sample Output (GET `/api/products`)

```json
[
  { "id": 1, "name": "Phone", "price": 299.99 },
  { "id": 2, "name": "Headset", "price": 89.50 }
]
```

---

## 🧪 Test It

Use:

* **Browser**: open `http://localhost:8080/your-app/api/products`
* **Postman**: send a GET request to that URL
* **JavaScript Fetch** (frontend):

```javascript
fetch('/your-app/api/products')
  .then(res => res.json())
  .then(data => console.log(data));
```

---

## 🧠 Summary

* Built a basic **REST API** using Jakarta EE
* Returned **JSON** from the server using a `Servlet`
* Tested the endpoint with Postman or browser

---


Great!

---

# **Lesson 12: Consuming the REST API with JavaScript (AJAX)**

---

### 🧠 What You Will Learn

* How to fetch and display data from your Jakarta EE REST API
* How to use **JavaScript Fetch API** (or `XMLHttpRequest`) for AJAX calls
* How to dynamically show products in an HTML table
* How this links backend and frontend cleanly

---

## 🛠 Prerequisites

Make sure you:

* Have your REST endpoint working from \[Lesson 11] — e.g., `/api/products`
* Have a working web page (`index.html` or `products.jsp`)

---

## 🔗 HTML Page Setup

**products.jsp**

```html
<!DOCTYPE html>
<html>
<head>
  <title>Products</title>
</head>
<body>
  <h1>Product List</h1>
  <table border="1" id="productTable">
    <thead>
      <tr>
        <th>ID</th><th>Name</th><th>Price</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>

  <script src="app.js"></script>
</body>
</html>
```

---

## 🔄 JavaScript: Fetch Data from API

**app.js**

```javascript
document.addEventListener("DOMContentLoaded", () => {
  fetch("/your-app/api/products")
    .then(response => {
      if (!response.ok) throw new Error("Failed to fetch data");
      return response.json();
    })
    .then(products => {
      const tableBody = document.querySelector("#productTable tbody");
      products.forEach(p => {
        const row = document.createElement("tr");
        row.innerHTML = `<td>${p.id}</td><td>${p.name}</td><td>$${p.price.toFixed(2)}</td>`;
        tableBody.appendChild(row);
      });
    })
    .catch(error => console.error("Error:", error));
});
```

> Replace `/your-app/` with your real project path.

---

### 📺 Output (in browser)

The products from your backend API are displayed as rows in a table—fetched **dynamically** using JavaScript.

---

## 🔁 Bonus: Display with Loading Message

Add a loading message while fetching:

```html
<div id="loading">Loading products...</div>
<table id="productTable" style="display:none;">
  ...
</table>
```

Update `app.js`:

```javascript
fetch("/your-app/api/products")
  .then(res => res.json())
  .then(products => {
    document.getElementById("loading").style.display = "none";
    document.getElementById("productTable").style.display = "table";
    // populate table...
  });
```

---

## 🧠 Summary

* Used **AJAX (Fetch API)** to request backend data
* Rendered the JSON as a table dynamically
* Connected Jakarta EE backend to a frontend with no page reloads

---
