# 🔌 API Documentation

## 📋 Table of Contents
- [Authentication](#authentication)
- [Endpoints](#endpoints)
- [Error Handling](#error-handling)
- [Rate Limiting](#rate-limiting)

## 🔐 Authentication

### JWT Authentication
```http
POST /api/auth/login
Content-Type: application/json

{
    "email": "user@example.com",
    "password": "secure_password"
}
```

**Response**
```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
    "token_type": "Bearer",
    "expires_in": 3600
}
```

## 📚 Endpoints

### Course Management

#### List Courses
```http
GET /api/courses
Authorization: Bearer {token}
```

**Response**
```json
{
    "data": [
        {
            "id": 1,
            "title": "Introduction to Computer Science",
            "description": "Learn the basics of programming",
            "instructor": {
                "id": 1,
                "name": "John Doe"
            },
            "created_at": "2024-03-20T12:00:00Z"
        }
    ],
    "meta": {
        "current_page": 1,
        "total": 50,
        "per_page": 15
    }
}
```

#### Create Course
```http
POST /api/courses
Authorization: Bearer {token}
Content-Type: application/json

{
    "title": "Advanced Mathematics",
    "description": "Complex mathematical concepts",
    "start_date": "2024-04-01",
    "end_date": "2024-07-31"
}
```

### User Management

#### User Profile
```http
GET /api/users/{id}
Authorization: Bearer {token}
```

**Response**
```json
{
    "data": {
        "id": 1,
        "name": "John Doe",
        "email": "john@example.com",
        "role": "student",
        "enrolled_courses": [
            {
                "id": 1,
                "title": "Introduction to Computer Science"
            }
        ]
    }
}
```

### Assignments

#### Submit Assignment
```http
POST /api/assignments/{id}/submit
Authorization: Bearer {token}
Content-Type: multipart/form-data

{
    "file": "assignment.pdf",
    "comments": "Here's my submission"
}
```

## ❌ Error Handling

### Error Response Format
```json
{
    "error": {
        "code": "VALIDATION_ERROR",
        "message": "The given data was invalid",
        "details": {
            "title": ["The title field is required"]
        }
    }
}
```

### Common Error Codes
| Code | Description |
|------|-------------|
| 400  | Bad Request |
| 401  | Unauthorized |
| 403  | Forbidden |
| 404  | Not Found |
| 422  | Validation Error |
| 500  | Server Error |

## ⚡ Rate Limiting

### Rate Limit Headers
```http
X-RateLimit-Limit: 60
X-RateLimit-Remaining: 59
X-RateLimit-Reset: 1616799942
```

### Rate Limit Rules
- Authentication: 60 requests per minute
- Course Creation: 30 requests per minute
- File Upload: 10 requests per minute

## 📊 Pagination

### Request
```http
GET /api/courses?page=2&per_page=15
```

### Response
```json
{
    "data": [...],
    "meta": {
        "current_page": 2,
        "from": 16,
        "to": 30,
        "total": 50,
        "per_page": 15,
        "last_page": 4
    },
    "links": {
        "first": "http://api.example.com/courses?page=1",
        "last": "http://api.example.com/courses?page=4",
        "prev": "http://api.example.com/courses?page=1",
        "next": "http://api.example.com/courses?page=3"
    }
}
```

## 🔍 Search

### Course Search
```http
GET /api/courses/search?q=programming&category=computer-science
```

### Advanced Filtering
```http
GET /api/courses?filter[status]=active&sort=-created_at&include=instructor,students
```

## 📱 WebSocket Events

### Real-time Notifications
```javascript
Echo.private(`User.${userId}`)
    .notification((notification) => {
        console.log(notification);
    });
```

### Course Updates
```javascript
Echo.channel('course.${courseId}')
    .listen('.course.updated', (e) => {
        console.log(e);
    });
```

## 🔒 Security

### CORS Configuration
```http
Access-Control-Allow-Origin: *
Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS
Access-Control-Allow-Headers: Content-Type, Authorization
```

### API Versioning
```http
Accept: application/vnd.universitylms.v1+json
```

## 📚 SDK Examples

### JavaScript
```javascript
const lms = new UniversityLMS({
    apiKey: 'your-api-key',
    version: 'v1'
});

const courses = await lms.courses.list();
```

### PHP
```php
$lms = new UniversityLMS([
    'apiKey' => 'your-api-key',
    'version' => 'v1'
]);

$courses = $lms->courses()->list();
``` 