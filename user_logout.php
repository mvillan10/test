<?php   
session_start(); 
session_destroy(); //destroy the session
echo '<script>
window.history.go(-1);
</script>'
?>