<?php

// AND
// a && b (true jika a dan b keduanya true)

// OR
// a || b (true jika a dan b salah satu atau keduanya true)

// NOT
// ! a (true jika a bernilai false) kebalikannya 

// XOR
// a  xor b (jika salah satunya true bener tapi engga keduanya)

var_dump(true && true);
var_dump(true && false);

var_dump(true || false);
var_dump(false || false);

var_dump(true xor false);
var_dump(true xor true);

var_dump(!true);
var_dump(!false);