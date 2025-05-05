## **Lesson 1: Introduction to Spring Boot for Web Development**

### 🔹 What is Spring Boot?

Spring Boot is an opinionated framework built on top of the Spring Framework. It helps developers build production-ready, stand-alone Spring applications with minimal setup and configuration.

### 🔹 Why Use Spring Boot?

* **Auto-configuration** of dependencies
* **Embedded servers** (Tomcat, Jetty, etc.)
* **Simplified setup** for REST APIs and web applications
* **Great for microservices**
* Large, active community and extensive documentation

---

## **🧰 Prerequisites**

* Java 17+ (use the latest LTS version)
* IDE (IntelliJ IDEA, Eclipse, or VS Code)
* Maven or Gradle (we’ll use Maven)
* Basic Java knowledge (OOP, classes, methods)

---

## **📦 Project Setup**

### Step 1: Generate a Spring Boot App

Use [https://start.spring.io](https://start.spring.io) to generate the project.

#### Project Settings:

* Project: **Maven**
* Language: **Java**
* Spring Boot: **Latest stable**
* Group: `com.example`
* Artifact: `mywebapp`
* Name: `MyWebApp`
* Dependencies:

  * Spring Web
  * Spring Boot DevTools
  * Thymeleaf (for HTML templating)
  * Spring Data JPA
  * H2 Database (for quick dev)

Download the `.zip`, extract, and open in your IDE.

---

### Step 2: Run Your First Spring Boot App

#### In your IDE:

* Locate the `MyWebAppApplication.java` class.

```java
package com.example.mywebapp;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
public class MyWebAppApplication {
    public static void main(String[] args) {
        SpringApplication.run(MyWebAppApplication.class, args);
    }
}
```

#### Run it ➡️

* You should see the embedded Tomcat server start on port `8080`.

Test in your browser:

```
http://localhost:8080
```

---

## ✅ Your First Controller

Let’s respond to a web request.

### Create `HomeController.java`:

```java
package com.example.mywebapp.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class HomeController {

    @GetMapping("/")
    public String home() {
        return "index";
    }
}
```

### Create `index.html` in `src/main/resources/templates`:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spring Boot Home</title>
</head>
<body>
    <h1>Welcome to My Spring Boot Web App!</h1>
</body>
</html>
```

Visit: `http://localhost:8080/` ✅

---

### 🧪 Assignment / Hands-On:

* Add a `/about` route that loads `about.html` with your name and what you’re learning.
* Bonus: Add a footer using Thymeleaf fragments.

---


## **Lesson 2: Routing and Controllers in Spring Boot**

This lesson deepens your understanding of how Spring Boot maps HTTP requests to controller methods using annotations like `@GetMapping`, `@PostMapping`, and more.

---

### 🔹 What is a Controller?

A **controller** is a Java class marked with `@Controller` (or `@RestController`) that handles HTTP requests and returns views (HTML) or data (JSON).

---

## **Types of Controllers**

### 1. `@Controller`

* Used to return HTML pages using Thymeleaf or JSP.
* Returns the name of a view template.

### 2. `@RestController`

* Used in APIs to return raw data (usually JSON).
* Returns data objects directly.

---

## **Basic Routing with `@GetMapping` and `@PostMapping`**

### `@GetMapping`

Used to handle GET requests (usually for displaying pages or retrieving data).

```java
@GetMapping("/about")
public String about() {
    return "about";
}
```

### `@PostMapping`

Used to handle POST requests (typically for form submission).

```java
@PostMapping("/submit")
public String handleForm() {
    return "result";
}
```

---

## 🛠 Example: Multiple Routes

### `HomeController.java`

```java
package com.example.mywebapp.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/pages")
public class HomeController {

    @GetMapping("/home")
    public String home() {
        return "index";
    }

    @GetMapping("/about")
    public String about() {
        return "about";
    }

    @GetMapping("/contact")
    public String contact() {
        return "contact";
    }
}
```

### `index.html`, `about.html`, `contact.html` — place them in `/templates/`.

---

## 🧠 Concept: Route Parameters

You can accept parameters from the URL using `@PathVariable`.

```java
@GetMapping("/user/{name}")
public String greetUser(@PathVariable String name, Model model) {
    model.addAttribute("username", name);
    return "greet";
}
```

### `greet.html`

```html
<h1>Hello, <span th:text="${username}"></span>!</h1>
```

Visit: `http://localhost:8080/user/Alice` → `Hello, Alice!`

---

## 🧪 Assignment:

* Create a `/profile/{name}` route that shows a simple profile page using the URL parameter.
* Try adding an image and a short bio in the template.
* Bonus: Use multiple parameters like `/profile/{name}/{age}`

---
