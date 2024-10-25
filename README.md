# Challenge 1  Start up file
Project (React / Laravel composer)

Event Planner / Task Manager

## Description
Our application is an event planner designed to provide a clear overview of activities and events across different dates. Users can easily modify event details, such as dates, names, descriptions, and more. As an event approaches, the app sends a pop-up notification with a brief summary of the event.

Additionally, users can choose to share their calendars publicly or keep them private. Public calendars can be viewed by others, while private ones remain hidden. The app also includes a social aspect, allowing users to add friends and receive notifications when a friend's event is coming up. Events can be shared between friends, and users can invite each other to common activities, with the recipient needing to accept the shared event for it to appear on their calendar.

**Note that this project is currently under construction and most features have not been implemented yet.**   

## Different features
### Event Management
Create, edit, and delete events or activities.
Update event details such as date, time, name, and description.
Manage recurring events.

### Calendar Overview
Visual overview of events/activities displayed by day, week, or month.
Navigate between different dates to view upcoming or past events.

### Public and Private Calendars
Option to make your calendar public or private.
View other users’ public calendars to see their events.
Private calendars remain hidden from other users.

### Friend System
Add friends within the app and view their public calendars.
Receive notifications when a friend's event is near.

### Shared Events
Share events or activities with friends.
Add events to a friend's calendar with their approval.
Joint event creation, where both users can manage the event together.


## Running the Project

1. **Open the Project**  
   Open the project in your preferred IDE.

2. **Start the Backend Server**  
   - Open a terminal and navigate to the backend directory:  
     `cd ./Backend/starter-file-backend`
   - Run the following command to start the backend server:  
     ```bash
     php artisan serve
     ```

3. **Start the Frontend Server**  
   - Open a new terminal and navigate to the frontend directory:  
     `cd ./Frontend/frontend`
   - Run the following command to start the frontend server:  
     ```bash
     npm start
     ```

## API Routes

### Events 
- **GET** route:  
  `http://localhost:8000/api/events`
- **POST** route:  
  `http://localhost:8000/api/events`

### Users 
- **GET** route:  
  `http://localhost:8000/api/users`





