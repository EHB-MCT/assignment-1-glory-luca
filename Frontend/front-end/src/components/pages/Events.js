import React, { useEffect, useState } from 'react';
import Event from '../common/Event.js';

const Events = () => {
  const [events, setEvents] = useState([]);

  useEffect(() => {
    const fetchEvents = async () => {
      try {
        const response = await fetch('http://localhost:8000/api/events'); // Updated URL
        const data = await response.json();
        setEvents(data);
      } catch (error) {
        console.error('Error fetching events:', error);
      }
    };

    fetchEvents();
  }, []);

  return (
    <div className='events'>
      <h1>See your events:</h1>
      <div className="cards">
        {events.map(event => (
          <Event 
            key={event.id} 
            name={event.name} 
            description={event.description} 
            date={event.date} 
            time={event.time} 
          />
        ))}
      </div>
    </div>
  );
};

export default Events;
