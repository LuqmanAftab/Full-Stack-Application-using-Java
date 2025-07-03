-- Create Database if it does not exist
IF NOT EXISTS (
    SELECT name 
    FROM sys.databases 
    WHERE name = N'user_auth'
)
BEGIN
    CREATE DATABASE user_auth;
END;
GO

-- Switch to the database
USE user_auth;
GO

-- Create Users Table
IF NOT EXISTS (
    SELECT * 
    FROM sys.tables 
    WHERE name = 'users'
)
BEGIN
    CREATE TABLE users (
        id INT IDENTITY(1,1) PRIMARY KEY,
        username NVARCHAR(50) NOT NULL UNIQUE,
        email NVARCHAR(100) NOT NULL UNIQUE,
        password NVARCHAR(255) NOT NULL,
        created_at DATETIME DEFAULT GETDATE()
    );
END;
GO
