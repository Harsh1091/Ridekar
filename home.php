
<!DOCTYPE html>
<html>
<head>
  <title>Ride Sharing</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
    <h1>RideKar</h1>
  </header>
  
  <main>
    <div class="search">
      <h2>Search Rides</h2>
      <form action="search.php" method="post">
        <input type="text" name="fromInput" placeholder="From">
        <input type="text" name="toInput" placeholder="To">
        <input type="date" name="dateInput">
        <input type="time" name="timeInput">
        <button type="submit">Search</button>
      </form>
    </div>
    
    <div class="publish">
  <h2>Publish a Ride</h2>
  <form action="publish.php" method="post">
    <input type="text" name="publishFromInput" placeholder="From">
    <input type="text" name="publishToInput" placeholder="To">
    <input type="date" name="publishDateInput">
    <input type="time" name="publishTimeInput">
    <input type="text" name="publishSeatInput" placeholder="No of seats">
    <input type="text" name="publishContactInput" placeholder="Contact Details">
    <input type="text" name="publishNameInput" placeholder="Your Name">
    <button type="submit">Publish</button>
  </form>
</div>

  </main>
  
  <footer>
    <p>© 2023 Ride Sharing App. All rights reserved.</p>
  </footer>
</body>
</html>


