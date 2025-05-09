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
    <version>8.3.0</version>
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

