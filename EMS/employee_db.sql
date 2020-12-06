-- EMPLOYEE DATABASE
CREATE DATABASE EMPLOYEE;

USE EMPLOYEE;


-- CREATING EMPLOYEE TABLE
CREATE TABLE emp(
        emp_id INT AUTO_INCREMENT PRIMARY KEY,
        emp_fname VARCHAR(30) NOT NULL,
        emp_lname VARCHAR(30) NOT NULL,
        emp_mobile VARCHAR(10) NOT NULL,
        emp_dob DATE NOT NULL,
        emp_gender VARCHAR(6) NOT NULL,
        emp_city VARCHAR(50) NOT NULL
);


-- CREATING PROJECTS TABLE
CREATE TABLE projects(
    proj_id INT AUTO_INCREMENT PRIMARY KEY,
    proj_name VARCHAR(100) NOT NULL UNIQUE,
    project_desc TEXT NOT NULL,
    proj_start DATE NOT NULL,
    proj_end DATE
);

ALTER TABLE projects
ADD UNIQUE (proj_name);

CREATE TABLE emp_proj
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    emp_id INT,
    proj_id INT,
    FOREIGN KEY (emp_id) REFERENCES emp (emp_id) ON DELETE CASCADE;
    FOREIGN KEY(proj_id) REFERENCES projects (proj_id) ON DELETE CASCADE;
);

ALTER TABLE emp_proj
ADD FOREIGN KEY(proj_id) REFERENCES projects (proj_id) ON DELETE CASCADE;


-- retriving proj details

SELECT e.emp_fname,
        p.proj_name

FROM emp e,
    projects p,
    emp_proj ep

WHERE e.emp_id=2 AND ep.emp_id=2
        AND p.proj_id=ep.proj_id;    