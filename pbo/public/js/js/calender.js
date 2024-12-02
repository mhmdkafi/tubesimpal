document.addEventListener("DOMContentLoaded", function() {
    const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    let currentDate = new Date();
    
    const prevMonthButton = document.getElementById("prev-month");
    const nextMonthButton = document.getElementById("next-month");
    const calendarMonth = document.getElementById("calendar-month");
    const calendarDays = document.getElementById("calendar-days");
    const timeDisplay = document.getElementById("time");

    // Function to update the calendar view
    function updateCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();
        const firstDay = new Date(year, month, 1).getDay();
        const lastDate = new Date(year, month + 1, 0).getDate();
        
        // Update the month display
        calendarMonth.textContent = `${currentDate.toLocaleString('default', { month: 'long' })} ${year}`;

        // Clear previous days
        calendarDays.innerHTML = "";

        // Display the days of the week header
        daysOfWeek.forEach(day => {
            const dayHeader = document.createElement("div");
            dayHeader.classList.add("day-header");
            dayHeader.textContent = day;
            calendarDays.appendChild(dayHeader);
        });

        // Empty cells for the days before the 1st day of the month
        for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement("div");
            calendarDays.appendChild(emptyCell);
        }

        // Display the actual days of the month
        for (let i = 1; i <= lastDate; i++) {
            const dayCell = document.createElement("div");
            dayCell.textContent = i;
            dayCell.classList.add("day");
            calendarDays.appendChild(dayCell);
        }
    }

    // Function to update the current time display
    function updateCurrentTime() {
        const now = new Date();
        timeDisplay.textContent = now.toLocaleTimeString();
    }

    // Event listener for navigating to the previous month
    prevMonthButton.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        updateCalendar();
    });

    // Event listener for navigating to the next month
    nextMonthButton.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        updateCalendar();
    });

    // Initial calendar and time setup
    updateCalendar();
    setInterval(updateCurrentTime, 1000); // Update the time every second
});
