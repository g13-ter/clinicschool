-- Create database if it doesn't exist
CREATE DATABASE IF NOT EXISTS school_clinic CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Grant permissions to school_clinic user from any host
GRANT ALL PRIVILEGES ON school_clinic.* TO 'school_clinic'@'%' IDENTIFIED BY 'clinic';
FLUSH PRIVILEGES;

