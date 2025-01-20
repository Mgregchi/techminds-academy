# techminds-academy
Resources for techminds academy

This is a clear and straightforward guide for basic Git usage. Here is a more polished and structured version for clarity and readability:

---

# Simple Git Guide for Managing Repositories

## 1. **Navigate to Your Documents Folder**
Ensure you are inside your `Documents` folder (or the folder where you want to store the repository):  
```bash
cd Documents
```

---

## 2. **Clone the Git Repository**
Use the `git clone` command to copy the repository to your local machine:  
```bash
git clone <repo-url>
```
Example:  
```bash
git clone https://github.com/Mgregchi/techminds-academy
```

---

## 3. **Enter the Cloned Repository**
Navigate into the folder of the cloned repository:  
```bash
cd <name-of-repository>
```
Example:  
```bash
cd techminds-academy
```

---

## 4. **Make Changes**
Modify the files as needed using your text editor or IDE.

---

## 5. **Stage Your Changes**
To stage **all changes**:  
```bash
git add .
```

To stage a **specific file**:  
```bash
git add <filename>
```
Example:  
```bash
git add index.js
```

---

## 6. **Commit Your Changes**
Write a concise message explaining the reason for the changes:  
```bash
git commit -m "<message>"
```
Example:  
```bash
git commit -m "Added the password protection feature"
```

---

## 7. **Push Your Changes to GitHub**
Upload the committed changes to the repository:  
```bash
git push
```

---

## 8. **Pull Changes from the Remote Repository**
Before making changes, always pull the latest updates from the remote repository to ensure your local version is up-to-date:  
```bash
git pull
```

If there are any conflicts, Git will notify you and ask you to resolve them before proceeding.

---

## 9. **Cancel Changes (Undoing Work)**

### **Cancel All Unstaged Changes**  
To discard all unstaged changes in your working directory:  
```bash
git restore .
```

### **Cancel Specific Unstaged Changes**  
To discard changes in a specific file:  
```bash
git restore <filename>
```
Example:  
```bash
git restore index.js
```

### **Unstage Files After `git add`**  
If you added files to the staging area and want to unstage them:  
```bash
git restore --staged <filename>
```
Example:  
```bash
git restore --staged index.js
```

### **Undo the Last Commit (if not pushed yet)**  
If you’ve committed changes but haven’t pushed them yet, you can undo the last commit:  
```bash
git reset --soft HEAD~1
```
This keeps your changes in the working directory for editing.

If you want to discard the commit **and** changes:  
```bash
git reset --hard HEAD~1
```

---

## Notes:
- Make sure you have the appropriate permissions and authentication (e.g., SSH key or GitHub token) to push changes to the repository.
- Use meaningful commit messages to keep track of changes effectively.
- Always pull the latest changes (`git pull`) before starting work.  
- Use `git status` to see the current state of your repository.  
- Be cautious with `git reset --hard` as it permanently discards changes.

