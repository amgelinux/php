<html>
<body>
// Se transmite por GET mediante un hipervínculo
<a href="segundo.php?variable1=fabian&variable2=andrea">Pagina 2</a>

// Se transmite por GET a través de formulario
// Ver el uso del array
//
<form action="segundo.php" method="GET">
Nombre: <input type="text" name="nombre" />

<label for="cars">Choose a car:</label>

<select name="cars[]">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>


<select name="cars[]">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>


<select name="cochecitos">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>   

<input type="submit">
</form>
</body>
</html>