A complete **IntelliJ Development Flow** for building **Java Servlet-based web apps** using:

* **IntelliJ + Tomcat** for servlet/JSP hosting
* **XAMPP (MySQL)** for the database
* Optional: **JDBC (MySQL Connector)** for connecting Java to MySQL

---

## ✅ Full Development Flow: IntelliJ + Tomcat + XAMPP

---

### 🧱 Step 1: Set Up Your Tools

| Tool        | Purpose                         |
| ----------- | ------------------------------- |
| IntelliJ    | Java development                |
| Tomcat      | Java web server (servlets/JSP)  |
| XAMPP       | MySQL database (via phpMyAdmin) |
| JDBC Driver | Connect Java to MySQL           |

---

### 🔧 Step 2: Create a Maven Web Project in IntelliJ

1. **File > New > Project**
2. Choose **Maven** > Check **"Create from archetype"** → Select `maven-archetype-webapp`
3. Set:

   * GroupId: `com.example`
   * ArtifactId: `myservletapp`
4. Click Finish

---

### 📂 Maven Project Structure

```
myservletapp/
├── src/
│   └── main/
│       ├── java/                ← Your servlets go here
│       ├── resources/           ← config/resources (optional)
│       └── webapp/
│           ├── WEB-INF/
│           │   └── web.xml      ← (optional if using annotations)
│           └── index.jsp        ← test page
├── pom.xml
```

---

### ⚙️ Step 3: Add Dependencies to `pom.xml`

```xml
<dependencies>
  <!-- Servlet API (provided by Tomcat) -->
  <dependency>
    <groupId>jakarta.servlet</groupId>
    <artifactId>jakarta.servlet-api</artifactId>
    <version>6.0.0</version>
    <scope>provided</scope>
  </dependency>

  <!-- MySQL JDBC Connector -->
  <dependency>
    <groupId>mysql</groupId>
    <artifactId>mysql-connector-j</artifactId>
    <version>9.3.0</version>
  </dependency>
</dependencies>
```

---

### 🖥 Step 4: Setup XAMPP & MySQL

1. Open **XAMPP Control Panel**
2. Start **Apache** and **MySQL**
3. Open **phpMyAdmin** (`http://localhost/phpmyadmin`)
4. Create a **new database**, e.g. `testdb`
5. Create a table and add dummy data

---

### 🔌 Step 5: Connect Servlet to MySQL

Create a Servlet under `src/main/java/com/example/HelloDBServlet.java`:

```java
package com.example;

import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.*;
import jakarta.servlet.ServletException;
import java.io.*;
import java.sql.*;

@WebServlet("/dbtest")
public class HelloDBServlet extends HttpServlet {
    protected void doGet(HttpServletRequest req, HttpServletResponse resp)
            throws ServletException, IOException {

        resp.setContentType("text/html");
        PrintWriter out = resp.getWriter();

        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            String dbURL = "jdbc:mysql://localhost:3306/testdb";
            String user = "root";      // default for XAMPP
            String pass = "";          // usually blank

            Connection conn = DriverManager.getConnection(dbURL, user, pass);
            Statement stmt = conn.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT * FROM your_table");

            while (rs.next()) {
                out.println("<p>" + rs.getString("column_name") + "</p>");
            }

            conn.close();
        } catch (Exception e) {
            out.println("Database error: " + e.getMessage());
        }
    }
}
```

---

### 🌐 Step 6: Configure Tomcat in IntelliJ

1. **File > Project Structure > SDKs**: Ensure Java SDK is added
2. **Project Structure > Facets**: Add **Web Facet** if missing
3. **Add Tomcat Server**:

   * **Run > Edit Configurations > + > Tomcat Local Server**
   * Configure:

     * **Deployment**: Add `war exploded`
     * **Server**: Point to Tomcat folder

---

### ▶️ Step 7: Run Your App

* Run the Tomcat configuration
* Open in browser:

  ```
  http://localhost:8080/myservletapp/dbtest
  ```
* You should see data from your XAMPP MySQL database.

---

### 🧼 Tips for Development

* Use `Build > Rebuild Project` if changes don’t reflect
* Use **@WebServlet** annotations to skip `web.xml`
* Place static files (HTML/CSS) in `webapp/`

---

To Tomcat, a **webapp must follow the exploded WAR layout**, like this:

```
webapps/userme/
├── index.jsp
├── META-INF/
├── WEB-INF/
│   ├── web.xml
│   └── classes/
│       └── org/example/Signup.class
```

Your current setup puts compiled classes in `target/classes/`, but **Tomcat expects them in `WEB-INF/classes/`**, not `target`.

---

## ✅ Build & Deploy WAR or Exploded Webapp

You have two main options:

---

### ✅ Option 1: Let IntelliJ Build the WAR and Deploy It

#### Step 1: Configure an Artifact

1. Go to **File > Project Structure > Artifacts**
2. Click `+` → **Web Application: Exploded**
3. Select the correct `web.xml` and output directory (IntelliJ auto-detects this)
4. Save

#### Step 2: Deploy It

* **Build > Build Artifacts > userme\:war exploded > Build**
* Copy the built artifact from:

  ```
  target/artifacts/userme_war_exploded/
  ```

  into:

  ```
  C:\xampp\tomcat\webapps\userme\
  ```

#### Step 3: Restart Tomcat from XAMPP

Then visit:

```
http://localhost:8080/userme/signup
```

---

### ✅ Option 2: Manually Create a WAR-Structured Folder

If you want to do it manually, do this:

1. Create a folder like:

   ```
   C:\xampp\tomcat\webapps\userme\
   ```

2. Copy the following into it:

   ```
   index.jsp                      → goes to userme/
   web.xml                        → goes to userme/WEB-INF/
   Signup.class                   → goes to userme/WEB-INF/classes/org/example/
   ```

3. Result:

   ```
   userme/
   ├── index.jsp
   └── WEB-INF/
       ├── web.xml
       └── classes/
           └── org/
               └── example/
                   └── Signup.class
   ```

4. Restart Tomcat again.

---

## ⚙️ Bonus: Check your `web.xml` (if not using `@WebServlet`)

```xml
<web-app xmlns="https://jakarta.ee/xml/ns/jakartaee"
         version="6.0">

    <servlet>
        <servlet-name>Signup</servlet-name>
        <servlet-class>org.example.Signup</servlet-class>
    </servlet>

    <servlet-mapping>
        <servlet-name>Signup</servlet-name>
        <url-pattern>/signup</url-pattern>
    </servlet-mapping>
</web-app>
```

OR skip `web.xml` by adding this to your `Signup.java`:

```java
@WebServlet("/signup")
public class Signup extends HttpServlet {
    // ...
}
```

---

## ✅ Final Test

Once the structure is correct and Tomcat is restarted, visit:

```
http://localhost:8080/userme/signup
```

You should now see your servlet response.

---
