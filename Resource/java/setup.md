A method to compile and run a `.java` file like `HelloServlet.java` that depends on external libraries (like `jakarta.servlet-api`) **without manually using `javac -cp`**, especially when you're using **IntelliJ IDEA**. IntelliJ handles dependencies and compilation internally — you just need to configure the project correctly.

---

### ✅ Here's how to do it in IntelliJ IDEA:

#### 1. **Create a Java Project** (or use your existing one)

* Open IntelliJ.
* Go to **File > New > Project** > Choose **Java** > Next.
* Name your project and finish setup.

#### 2. **Add the Servlet JAR as a library**

Since `HelloServlet.java` uses `jakarta.servlet.*`, you must add the `jakarta.servlet-api-6.0.0.jar` to your project.

**Option A: Add .jar manually**

1. Go to **File > Project Structure (Ctrl+Alt+Shift+S)**.
2. In **Modules > Dependencies** tab, click `+` > **JARs or directories**.
3. Navigate to:

   ```
   C:\Program Files\Apache Software Foundation\Tomcat 11.0\lib\jakarta.servlet-api-6.0.0.jar
   ```
4. Select it and click OK.
5. Ensure the scope is set to `Provided` (since Tomcat provides it at runtime).

**Option B: Use Maven or Gradle** (Recommended if using build tools)

* For **Maven**, add to `pom.xml`:

```xml
<dependency>
  <groupId>jakarta.servlet</groupId>
  <artifactId>jakarta.servlet-api</artifactId>
  <version>6.0.0</version>
  <scope>provided</scope>
</dependency>
```

---

#### 3. **Place your `.java` file properly**

Move `HelloServlet.java` into the `src` directory under the proper package, e.g.:

```
src/
└── main/
    └── java/
        └── com/
            └── example/
                └── HelloServlet.java
```

Make sure the `package com.example;` declaration matches the folder structure.

---

#### 4. **Build the project**

* IntelliJ will automatically compile `.java` files when you build:

  * Click **Build > Build Project** (or press `Ctrl+F9`).
  * `.class` files will be generated in `out/production/<project-name>/`.

---

### ✅ Summary

You don't need to manually use `javac -cp` in IntelliJ. Just:

1. Add the JAR to your project dependencies.
2. Place the `.java` file in the correct source folder.
3. Use IntelliJ’s **Build** menu to compile it.

---

Let’s walk through **how to deploy a servlet to Tomcat from within IntelliJ IDEA**, step-by-step.

---

### ✅ Prerequisites

* **Tomcat installed** (you already have Tomcat 11).
* Your servlet code (e.g. `HelloServlet.java`).
* IntelliJ IDEA (Community Edition is enough for basic servlet deployment, but Ultimate has more built-in tools).

---

### 🧩 Step-by-Step Guide to Deploy a Servlet to Tomcat in IntelliJ

---

#### **1. Create a Web Application Project**

If you haven’t already:

1. Go to **File > New > Project**.
2. Choose **Java with Ant**, **Maven**, or **Gradle**, then select **"Web Application"** (or add a module later).
3. Set up a project structure like this:

```
ProjectRoot/
├── src/
│   └── main/
│       └── java/
│           └── yourpackage/
│               └── HelloServlet.java
├── web/
│   └── WEB-INF/
│       └── web.xml
```

> For Maven: IntelliJ may place `web.xml` under `src/main/webapp/WEB-INF/web.xml`.

---

#### **2. Add Tomcat as an Application Server**

1. Go to **File > Project Structure (Ctrl+Alt+Shift+S)**.
2. Under **Project Settings > SDKs**, make sure a **Java SDK** is selected.
3. Then go to **Platform Settings > Application Servers**.
4. Click the `+` button, select **Tomcat**, and point it to:

   ```
   C:\Program Files\Apache Software Foundation\Tomcat 11.0
   ```

---

#### **3. Add the Servlet JAR (if not using Maven)**

* In **Modules > Dependencies**, click `+` > **JARs or directories**.
* Add:

  ```
  jakarta.servlet-api-6.0.0.jar
  ```

  from the Tomcat `lib/` directory.
* Set its **scope to "Provided"**.

---

#### **4. Configure web.xml** (if you're not using annotations)

Example `web.xml`:

```xml
<web-app xmlns="https://jakarta.ee/xml/ns/jakartaee"
         version="6.0">
    <servlet>
        <servlet-name>HelloServlet</servlet-name>
        <servlet-class>yourpackage.HelloServlet</servlet-class>
    </servlet>

    <servlet-mapping>
        <servlet-name>HelloServlet</servlet-name>
        <url-pattern>/hello</url-pattern>
    </servlet-mapping>
</web-app>
```

> Or use `@WebServlet("/hello")` annotation in your servlet and omit `web.xml`.

---

#### **5. Create a Run/Debug Configuration**

1. Go to **Run > Edit Configurations**.
2. Click `+` > choose **Tomcat Server > Local**.
3. Name it something like `Tomcat Deployment`.
4. In the **Deployment** tab:

   * Click `+` > **Artifact** > Select `war: exploded` or `war`.
   * (If no artifact exists, go to Project Structure > Artifacts and create one.)
5. Choose your Tomcat installation under **Server** tab.

---

#### **6. Run Your Project**

* Click **Run > Run 'Tomcat Deployment'**, or use the green run arrow.
* Wait for Tomcat to start, and IntelliJ will open:

  ```
  http://localhost:8080/your-app-name/hello
  ```

---

### 🧪 Test It

You should see your servlet’s response (e.g., `Hello from servlet`) in the browser.

Perfect! Using **annotations** to define servlets is simpler and removes the need for `web.xml`. This is supported in **Servlet 3.0+**, and since you're using **Jakarta Servlet 6.0.0**, you're all set.

---

### ✅ Step-by-Step: Convert Your Servlet to Use `@WebServlet`

---

### 🧩 1. **Modify Your Servlet Code**

Here's how your `HelloServlet.java` might look **without** `web.xml`:

```java
package yourpackage;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;

import java.io.IOException;
import java.io.PrintWriter;

@WebServlet("/hello") // This replaces web.xml mapping!
public class HelloServlet extends HttpServlet {

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        response.setContentType("text/html");
        PrintWriter out = response.getWriter();
        out.println("<h1>Hello from annotated servlet!</h1>");
    }
}
```

> Make sure the package declaration matches your directory structure.

---

### 🧩 2. **Remove or Ignore `web.xml`**

If you previously created a `web.xml`, you can either:

* Delete it entirely, or
* Leave it alone — it will be ignored if annotations handle the mappings and no conflicting configuration exists.

---

### 🧩 3. **Rebuild and Redeploy**

* Rebuild your project (`Build > Build Project`).
* Rerun the Tomcat configuration (`Run > Run 'Tomcat Deployment'`).

Visit:

```
http://localhost:8080/your-app-name/hello
```

You should see your servlet running — without needing any `web.xml`!

---

Let’s now extend your `HelloServlet` to **handle form submissions and URL parameters**, so it can process user input — a key part of servlet-based apps.

---

### ✅ Scenario: Handle a simple HTML form submission to the servlet

---

### 🧩 1. **Update the Servlet to Read Parameters**

Here’s an updated version of `HelloServlet` that accepts a `name` parameter:

```java
package yourpackage;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;

import java.io.IOException;
import java.io.PrintWriter;

@WebServlet("/hello")
public class HelloServlet extends HttpServlet {

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        String name = request.getParameter("name");
        if (name == null || name.trim().isEmpty()) {
            name = "Guest";
        }

        response.setContentType("text/html");
        PrintWriter out = response.getWriter();
        out.println("<h1>Hello, " + name + "!</h1>");
        out.println("<form method='get' action='hello'>");
        out.println("Enter your name: <input type='text' name='name'>");
        out.println("<input type='submit' value='Say Hello'>");
        out.println("</form>");
    }
}
```

---

### ✅ What this does:

* If accessed as `/hello`, it shows a form asking for a name.
* When you submit the form, it reloads `/hello?name=YourName`.
* The servlet greets the user by name.

---

### 🧩 2. **Run and Test**

1. Deploy to Tomcat using IntelliJ as before.

2. Open your browser to:

   ```
   http://localhost:8080/your-app-name/hello
   ```

3. You’ll see a form. Enter a name and submit it.

---

### 🧠 Tip:

* You can change the method to `POST` in the form and override `doPost()` in your servlet to handle form submissions securely.
* Example:

  ```html
  <form method="post" action="hello">
  ```

  Then in your servlet:

  ```java
  @Override
  protected void doPost(HttpServletRequest request, HttpServletResponse response)
          throws ServletException, IOException {
      // Handle form here
  }
  ```

---

Great — let’s now improve your servlet by:

1. Switching the form to use **POST** (more secure).
2. Handling the form submission in the servlet’s `doPost()` method.
3. Optionally redirecting or validating input.

---

### ✅ Step-by-Step: Handle Form Submissions with `POST`

---

### 🧩 1. **Update the HTML Form in `doGet()`**

Change your form method to `POST`:

```java
out.println("<form method='post' action='hello'>");
```

Now the form submits as an HTTP `POST` request.

---

### 🧩 2. **Add `doPost()` to Your Servlet**

Update your servlet to override `doPost()` and read the form data:

```java
@WebServlet("/hello")
public class HelloServlet extends HttpServlet {

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        response.setContentType("text/html");
        PrintWriter out = response.getWriter();

        out.println("<form method='post' action='hello'>");
        out.println("Enter your name: <input type='text' name='name'>");
        out.println("<input type='submit' value='Say Hello'>");
        out.println("</form>");
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        String name = request.getParameter("name");
        if (name == null || name.trim().isEmpty()) {
            name = "Guest";
        }

        response.setContentType("text/html");
        PrintWriter out = response.getWriter();
        out.println("<h1>Hello, " + name + "!</h1>");
        out.println("<a href='hello'>Go back</a>");
    }
}
```

---

### 🧠 Notes:

* This separates **form display (`doGet`)** and **form handling (`doPost`)**, which is best practice.
* You can add validation in `doPost()` and respond with custom messages or errors.
* You can also **redirect** to avoid form resubmission:

  ```java
  response.sendRedirect("hello?name=" + URLEncoder.encode(name, "UTF-8"));
  ```

---

### 🧪 Test the Flow:

1. Run the servlet via IntelliJ.
2. Visit:

   ```
   http://localhost:8080/your-app-name/hello
   ```
3. Submit the form.
4. Servlet will respond using `doPost()`.

---

