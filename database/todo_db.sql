CREATE DATABASE IF NOT EXISTS todo_db;

USE todo_db;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task_name VARCHAR(255) NOT NULL,
    description TEXT,
    status ENUM('pending','in_progress','done')
    DEFAULT 'pending',

    created_at TIMESTAMP
    DEFAULT CURRENT_TIMESTAMP
);