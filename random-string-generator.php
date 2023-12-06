// generates a random string [a-z/0-9]
// Note: not suitable for cryptography purposes
substr(str_shuffle(MD5(microtime())), 0, 10); // 10 characters 
