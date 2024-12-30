# ⚠The project is currently under development

## CMS API Documentation

This API enables you to manage content, users, roles, posts, comments, and more.

It uses **token-based authentication.**

## Table of Contents

-   [Database Schema](#databaseSchema)

    -   [Users Table](#usersTable)
    -   [Roles Table](#rolesTable)
    -   [Posts Table](#postsTable)
    -   [Categories Table](#categoriesTable)
    -   [Tags Table](#tagsTable)
    -   [Post_Tag Table](#postTagTable)
    -   [Comments Table](#commentsTable)

-   [Endpints](#endpoints)

-   [Relationships](#relationships)

## <span id='databaseSchema'>Database Schema <span>

-   ### <span id='usersTable'> Users Table: <span>

| Column     | Type         | Constraints                                           |
| ---------- | ------------ | ----------------------------------------------------- |
| id         | BIGINT       | PRIMARY KEY, AUTO_INCREMENT                           |
| name       | VARCHAR(255) | NOT NULL                                              |
| email      | VARCHAR(255) | UNIQUE, NOT NULL                                      |
| password   | VARCHAR(255) | NOT NULL                                              |
| role_id    | BIGINT       | FOREIGN KEY -> Roles(id)                              |
| created_at | TIMESTAMP    | DEFAULT CURRENT_TIMESTAMP                             |
| updated_at | TIMESTAMP    | DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP |

-   ### <span id='rolesTable'> Roles Table: <span>

| Column     | Type         | Constraints                                           |
| ---------- | ------------ | ----------------------------------------------------- |
| id         | BIGINT       | PRIMARY KEY, AUTO_INCREMENT                           |
| name       | VARCHAR(255) | NOT NULL                                              |
| created_at | TIMESTAMP    | DEFAULT CURRENT_TIMESTAMP                             |
| updated_at | TIMESTAMP    | DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP |
