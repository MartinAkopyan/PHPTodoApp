# ✅ PHP Todo App  

A simple web application for managing a to-do list, built with PHP.  
The app allows users to add, delete, and mark tasks as completed.  
Tasks are stored in the `todos.json` file.  

## 🚀 Features  

- 📝 **Add tasks** – Users can add new tasks through the form on the main page.  
- ✅ **Mark tasks as completed** – Each task can be marked as completed or reverted to "not completed."  
- 🗑 **Delete tasks** – Tasks can be removed from the list.  
- 💾 **Persistent storage** – Task states are saved in `todos.json`.  

## 📂 Project Structure  

- **`index.php`** – The main page displaying the task list and the form for adding new tasks.  
- **`newTodo.php`** – Handles the addition of new tasks.  
- **`changeStatus.php`** – Manages task status changes (completed/not completed).  
- **`deleteTodo.php`** – Handles task deletion.  
- **`todos.json`** – JSON file that stores tasks.  
- **`Dockerfile`** – Configuration for building a Docker image of the application.  
- **`docker-compose.yml`** – Configuration for running the application in a Docker container.  

## 🛠 How to Run  

1. Ensure that **Docker** and **Docker Compose** are installed.  
2. Clone the repository:  
   ```bash
   git clone https://github.com/your-repo/martinakopyan-phptodoapp.git
3. Navigate to the project directory
   ```bash
   cd martinakopyan-phptodoapp
4. Build and start the container:
   ```bash
   docker-compose up --build -d
5. Open the app in your browser:  
   👉 [http://localhost:8000](http://localhost:8000)
