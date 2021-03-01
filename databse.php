<?php
echo "<script type='text/JavaScript'> 

const mysql = require('mysql');

app.use(express.json());

let table = JSON.parse(fs.readFileSync('credentials.json', 'utf8'));
let conn = mysql.createConnection(table);
</script>";
?>