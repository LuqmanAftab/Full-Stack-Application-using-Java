# PHP MySQL Login & Signup System

A secure and user-friendly authentication system built with PHP and MySQL featuring modern UI design and robust security measures.

## 🚀 Features

- **User Registration** - Secure signup with validation
- **User Authentication** - Login with username/email and password
- **Password Security** - Bcrypt hashing for password storage
- **Session Management** - Secure session handling
- **Input Validation** - Comprehensive server-side validation
- **SQL Injection Protection** - Prepared statements for database queries
- **Responsive Design** - Mobile-friendly interface
- **Error Handling** - User-friendly error messages
- **Clean UI** - Modern gradient design with smooth animations

## 📁 Project Structure

```
login-system/
├── config.php          # Database configuration
├── index.php           # Main entry point
├── signup.php          # User registration page
├── login.php           # User login page
├── dashboard.php       # Protected user dashboard
├── logout.php          # Session logout handler
├── style.css           # CSS styles
├── database.sql        # Database schema
└── README.md          # Project documentation
```

## 🛠 Installation & Setup

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)
- PDO extension enabled

### Step 1: Database Setup
1. Create a MySQL database named `user_auth`
2. Run the SQL commands from `database.sql` to create the users table
3. Update database credentials in `config.php`

### Step 2: File Configuration
1. Place all files in your web server directory
2. Update `config.php` with your database credentials:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'your_username');
   define('DB_PASS', 'your_password');
   define('DB_NAME', 'user_auth');
   ```

### Step 3: Launch Application
1. Start your web server
2. Navigate to `http://localhost/your-project-folder/`
3. You'll be redirected to the login page

## 🔐 Security Features

### Password Security
- Passwords are hashed using `password_hash()` with bcrypt
- Password verification using `password_verify()`
- Minimum password length requirement (6 characters)

### SQL Injection Protection
- All database queries use prepared statements
- Input sanitization with `trim()` and `htmlspecialchars()`

### Session Security
- Secure session management
- Session validation on protected pages
- Proper session destruction on logout

### Input Validation
- Server-side validation for all form inputs
- Email format validation
- Username uniqueness check
- Password confirmation matching

## 📱 User Interface

### Design Features
- Modern gradient background
- Clean card-based layout
- Smooth hover animations
- Responsive design for mobile devices
- User-friendly error messages
- Professional typography

### Pages
1. **Login Page** - User authentication
2. **Signup Page** - User registration
3. **Dashboard** - Protected user area
4. **Logout** - Session termination

## 🧪 Testing Guide

### Registration Testing
1. Test with valid user data
2. Test with existing username/email
3. Test with mismatched passwords
4. Test with invalid email format
5. Test with empty fields

### Login Testing
1. Test with valid credentials
2. Test with invalid credentials
3. Test with non-existent user
4. Test with empty fields
5. Test session persistence

### Security Testing
1. Verify password hashing in database
2. Test SQL injection attempts
3. Verify session management
4. Test unauthorized access to protected pages

## 🔄 Usage Flow

1. **New User**: Visit signup page → Register → Redirect to login → Login → Access dashboard
2. **Existing User**: Visit login page → Login → Access dashboard
3. **Logout**: Click logout button → Return to login page

## 📋 Database Schema

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## 🎨 Customization

### Styling
- Modify `style.css` to change colors, fonts, and layout
- Update gradient colors in CSS variables
- Adjust responsive breakpoints

### Functionality
- Add password strength requirements
- Implement email verification
- Add remember me functionality
- Include user profile management

## 🐛 Troubleshooting

### Common Issues
1. **Database Connection Error**
   - Check database credentials in `config.php`
   - Ensure MySQL server is running
   - Verify database exists

2. **Session Issues**
   - Ensure session_start() is called
   - Check PHP session configuration
   - Verify file permissions

3. **Styling Issues**
   - Check CSS file path
   - Ensure web server serves CSS files
   - Clear browser cache

## 📊 Performance Considerations

- Database indexes on username and email columns
- Prepared statements for efficient queries
- Minimal CSS and optimized images
- Clean PHP code structure

## 🔒 Security Best Practices

- Regular security updates
- Strong password policies
- HTTPS implementation (recommended)
- Regular database backups
- Session timeout configuration

## 📈 Future Enhancements

- Email verification system
- Password reset functionality
- Two-factor authentication
- User role management
- Activity logging
- API integration

## 📝 License

This project is open source and available under the [MIT License](https://opensource.org/licenses/MIT).

## 🤝 Contributing

Feel free to fork this project and submit pull requests for improvements or bug fixes.

---

**Note**: This system is designed for educational purposes and small-scale applications. For production use, consider additional security measures and scalability optimizations.