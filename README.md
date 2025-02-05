# ✅ PHP Todo App  

A simple web application for managing a to-do list, built with PHP.  
The app allows users to add, delete, and mark tasks as completed.  
Tasks are stored in the `todos.json` file.  

## 🚀 Features  

- 📝 **Add tasks** – Users can add new tasks through the form on the main page.  
- ✅ **Mark tasks as completed** – Each task can be marked as completed or reverted to "not completed."  
- 🗑 **Delete tasks** – Tasks can be removed from the list.  
- 💾 **Persistent storage** – Task states are saved in `todos.json`.  

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
