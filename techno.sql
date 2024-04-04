-- Table structure for blog posts
CREATE TABLE posts (
    post_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    user_id INT,
    category_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sample data for posts
INSERT INTO posts (title, content, user_id, category_id) VALUES
('Introduction to Python', 'Python is a powerful programming language...', 1, 1),
('Understanding Neural Networks', 'Neural networks are a key component of AI...', 2, 2),
('Best Practices for Web Security', 'Web security is crucial for protecting your data...', 1, 3),
('Getting Started with React', 'React is a popular JavaScript library for building UIs...', 1, 4);
