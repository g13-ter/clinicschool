-- Fix permissions for school_clinic user to allow connections from any host
-- This script can be run manually if the database already exists

-- Drop existing user if it exists (from localhost)
DROP USER IF EXISTS 'school_clinic'@'localhost';
DROP USER IF EXISTS 'school_clinic'@'%';

-- Create user with permissions from any host
CREATE USER 'school_clinic'@'%' IDENTIFIED BY 'clinic';
GRANT ALL PRIVILEGES ON school_clinic.* TO 'school_clinic'@'%';
FLUSH PRIVILEGES;

