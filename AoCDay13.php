<?php

$trackGridInput = 
'                                   /--------------------------------------------------------------------------------------------\                     
                                   |                    /-------------------------------\                                       |                     
                                   |              /-----+-----------\                   |                                       |                     
  /--------\ /--------------------\|              |     | /---------+--------------\    |               /-----------------------+-----\               
  |        | |        /-----------++--------------+-----+-+---------+----\       /-+----+---------------+--------------\        |     |               
  |        | |        |           ||              |     |/+---------+----+-------+-+----+---------------+--------------+--------+-----+-------------\ 
/-+--------+-+--------+-----------++--------------+-----+++---------+----+-------+-+----+-----\         |              |     /--+-----+-----\       | 
| |     /--+-+--------+-----------++--------------+-----+++---------+----+-------+-+----+-----+---------+-----\        |     |  |     |     |       | 
| | /---+<-+-+--------+-----------++--------------+-----+++---------+----+-------+-+----+-----+----\    |     |        |     |  |     |  /--+------\| 
| | |   |  | |        |/----------++------------<-+-----+++---------+----+------\| |    |     |    |    |     |        |     |  |     |  |  |      || 
| | |   |  | |      /-++----------++--------------+-----+++---------+----+------++-+----+-----+----+----+-----+------\ |     |  |     |  |  |      || 
| | |   |  | |      | ||    /-----++--------------+-----+++--\      |    |      || |    |     |    |    |     |      | |     |  |     |  |  |      || 
| | |   |  | |      | ||    |     ||              |     |||  |      |    |      || |    |     |    |    |     |      | |     |  |     |  |  |      || 
| | |   |  ^ |      | ||    |     ||              |     |||  |      |    |      || |    |     |    |    |     |      | |     |  |     |  |  |      || 
| | |/--+--+-+------+-++----+\    ||              |     |||  |      |    |      || |/---+-----+----+----+-----+------+-+-----+--+-----+-\|  |      || 
| | ||  |  | |  /---+-++----++----++--------------+-----+++--+------+----+------++-++---+-----+----+----+-----+------+-+----\|  |    /+-++--+------++\
| | ||/-+--+-+--+---+-++----++----++-----\        |     |||  |      |    |      || ||   |     |    |    |     |      | |    ||  |    || ||  |      |||
| | ||| |  | |  |   | ||/---++----++-----+--------+-----+++-\|      | /--+------++-++-\ |     |    |    |     |      | |    ||  |    || ||  |      |||
| | ||| |  | |  |   | |||   ||/---++-----+--------+-----+++-++------+-+--+------++-++-+-+-----+----+----+--\  |      | |    ||  |    || ||  |      |||
| | ||| |  | |  |   \-+++---+++---++-----+--------+-----+++-++------+-+--+------++-++-+-+-----+----+----+--+--+------/ |    ||  |    || ||  |      |||
| | ||| |  | |  |     |||   |||   ||     |  /-----+-----+++-++------+-+--+-----\|| || | |     |    |    |  |  |        |    ||  |    || ||  |      |||
| | ||| |  | |  |     \++---+++---++-----+--+-----+-----+++-++------+-+--/     ||| || | |    /+----+----+--+--+--------+----++--+----++-++--+\     |||
| | |||/+--+-+--+------++---+++---++-----+--+-----+-----+++-++------+-+--------+++-++-+-+----++----+----+--+--+---\    |    ||  |    || ||  ||     |||
| | |||||  | |  |      \+---+++---++-----+--+-----+-----+++-++------+-+--------+/| || | |    ||    |    |  |  |   |    |    ||  |    || ||  ||     |||
| | |||||  | |  |       |/--+++---++-----+--+-----+-----+++-++------+-+--------+-+-++-+-+----++----+--\ |  |  |   |    |    ||  |    || ||  ||     |||
| | ||||\--+-+--+-------++--+++---++-----+--+-----+-----+++-++------+-+--------+-+-++-+-+----++----+--+-+--+--/   |    |    ||  |    || ||  ||     |||
| | ||||   | |  |       ||  |||   ||     |  |     |  /--+++-++------+\|        | | || | |    ||    |  | |  |      |    |    ||  |    \+-++--++-----++/
| | ||||   | |  |       ||  |||   ||     |  |     |  |  ||| ||      |||  /-----+-+-++-+-+----++----+--+-+--+------+----+----++--+-----+\||  ||     || 
| |/++++---+-+-\|       ||  |||   ||     |  |     |  |  ||| ||      |||  |     | | || | |    ||    |  | |  |      |    |    ||  |     ||||  ||     || 
| ||||\+---+-+-++-------++--+++---++-----/  |     |  |  |||/++------+++--+-----+-+-++-+-+----++----+--+-+--+------+----+----++--+---\ ||||  ||     || 
| |||| |   | | ||       ||  |||   ||        |     |  |  ||||||      ||| /+-----+-+-++-+-+----++----+--+-+--+------+---\|    ||  |   | ||||  ||     || 
| |||| |   | | ||       ||  |||   ||        |     |  |  ||||||      ||| ||     | | || | |    ||    |  | |  |      |   ||    ||  |   | ||||  ||     || 
| |||| |   | | ||       ||  \++---++--------+-----+--+--+++++/      ||| ||     | | || | |    ||    |  | |  |      |   ||    ||  |   | ||||  ||     || 
| |||| |   | | ||      /++---++---++--------+-----+--+--+++++-------+++-++-----+-+-++-+-+----++----+--+-+--+------+---++----++--+-\ | ||||  ||     || 
| |||| |   | | ||      |||   ||   ||        |     |  |  |||||  /----+++-++-----+-+-++-+-+----++----+--+-+--+------+---++---\||  | | | ||||  ||     || 
| |||| |   |/+-++------+++---++---++--------+-----+--+--+++++--+----+++-++-----+-+-++-+\|    ||    |  | ^  |      |   ||   |||  | | | ||||  ||     || 
| |||| |   ||| ||      |||   ||   ||        |/----+--+--+++++--+----+++-++-----+-+-++-+++--\ ||    |  | |  |      |   ||   |||  | | | ||||  ||     || 
| |||| |   ||| ||      |||   ||   ||        ||    |  |  |||||  |    ||| ||     | |/++-+++--+-++----+--+-+--+------+---++\  |||  | | | ||||  ||     || 
| |||| |   ||| ||      |||   ||   ||        ||    |  | /+++++--+----+++-++-----+-++++-+++--+-++----+--+-+--+------+---+++--+++--+-+-+-++++--++---\ || 
| |||| |   ||| ||      |||   ||   ||        ||    | /+-++++++--+----+++-++-----+-++++-+++--+-++-\  |  | |  |      |   |||  |||  | | | ||||  ||   | || 
| |||| | /-+++-++--\   |||   ||   ||    /---++----+-++-++++++--+----+++-++-----+-++++-+++--+-++-+--+--+-+--+--\   |   |||  |||  | | | ||||  ||   | || 
| |||| | | ||| ||  |   |||   ||   ||/---+---++----+-++-++++++--+----+++-++-----+-++++-+++--+-++\|  |  | \--+--+---+---+++--+++--+-+-+-/|||  ||   | || 
| |||| | | ||| ||  |   |||   |\---+++---+---++----+-++-++++++--+----+++-++-----+-++++-+++--+-++++--+--+----/  |   |   |||  |||  | | |/-+++--++-\ | || 
| |||| | | ||| ||  |   |||   |    |||   |   ||   /+-++-++++++--+----+++-++-----+-++++-+++--+-++++--+--+------\|   |   |||  |||  | | || |v|  || | | || 
| |||| | | ||| ||  |   |||   |    |||   |   ||   || || ||||||  |    ||| ||     | |||| |||  | ||||  |  |      ||   |   |||  |||  | | || |||  || | | || 
| |||| | | ||| || /+---+++---+---\|||   |   ||   || || ||\+++--+----+++-++-----+-++++-+++--+-++++--+--+------++---+---+++--+++--+-+-++-+++--++-+-+-+/ 
| |||| \-+-+++-++-++---+++---+---++++---+---++---++-++-++-+++--+----+++-++-----+-++++-+++--+-++++--+--+------++---/   |||  |||  | | || ||\--++-+-+-/  
| ||||   | ||| || ||   |||   |   ||||   |   ||   || || || |||  |    ||| ||/----+-++++-+++--+-++++--+--+------++-------+++--+++\ | | || ||   || | |    
| ||||   | ||| || || /-+++---+---++++---+---++---++\||/++-+++--+----+++-+++----+-++++-+++--+-++++--+-\|      ||       |||  |||| | | || ||   || | |    
| ||||   | ||| || || | |||  /+---++++--\|   ||   |||||||| |||  |    ||| |||    | |||| |||  | ||||  | ||      ||       |||  |||| | | || ||   || | |    
| ||||   | ||| || || | |||/-++---++++--++---++---++++++++-+++--+----+++-+++----+-++++\|||  | ||||  | ||      ||       |||  |||| | | || ||   || | |    
| ||||   | ||| || || | |||| ||   |||| /++---++---++++++++-+++--+----+++-+++----+-++++++++--+-++++--+-++------++--\    |||  |||| | | || ||   || | |    
| ||||   | ||| || || | ||||/++---++++-+++---++---++++++++-+++--+----+++-+++----+-++++++++--+-++++--+-++------++--+----+++--++++-+-+\|| ||   || | |    
| ||||   | ||| || || | |||||||   |||| |||   ||   |||||||| |||  |    ||| |||/---+-++++++++--+-++++--+-++------++--+----+++--++++-+-++++\||   || | |    
| ||||   | ||| || || | ||\++++---++++-+++---++---++++++++-+++--+----+++-++++---+-++++++++--+-++++--+-+/      ||  |    |||  |||| | |||||||  /++-+-+--\ 
| ||||   | ||| || || | || ||||   |||| ^||   ||   |||||||| |||  |    ||| ||||/--+-++++++++--+-++++--+-+-------++--+----+++--++++-+-+++++++--+++-+-+\ | 
| ||||   | |\+-++-++-+-++-++++---++++-+++---++---++++++++-+++--+----+++-+++++--+-++++++/|  | ||||  | |       ||  |    |||  |||| | |||||||  ||| | || | 
| ||||   | | | || || | || ||||   ||||/+++---++---++++++++-+++--+----+++-+++++--+-++++++-+--+-++++--+-+-------++--+----+++--++++-+-+++++++--+++\| || | 
| ||||   | | | || || | || |||v   |||||||| /-++---++++++++-+++--+-\  ||| |||||  | |||||| |  | ||||  | |  /-<--++--+----+++-\|||| | |||||v|  ||||| || | 
| ||||   | | | || || | || ||||   |||||||| | ||   |||||||| ||| /+-+--+++-+++++--+-++++++-+\ | ||||  | |  |    ||  |    ||| ||||| | |||||||  ||||| || | 
| ||||   | | | || || |/++-++++-\ |||||||| | ||   |||||||| ||| || |  ||| |||||  | |||||| || | ||||  | |  |    ||  |    ||| ||||| | |||||||  ||||| || | 
|/++++---+-+-+-++-++-++++-++++-+-++++++++-+-++---++++++++-+++-++-+--+++-+++++\ | |||||| || | ||||  | |  |    ||  |    ||| ||||| | |||||||  ||||| || | 
||||||   | | | || || |||| |||| | |||||||| | ||   |||||||| ||| ||/+--+++-++++++-+-++++++-++-+-++++--+\|  |    ||  |    ||| ||||| | |||||||  ||||| || | 
||||||   | | | || || |||| |||| | |||||||| | ||   \+++++++-+++-++++--+++-++++++-+-++++++-++-+-++++--+++--+----/|  |    ||| ||||| | |||||||  ||||| || | 
||||||   | | | || || |||| |||| | |||||||| | ||  /-+++++++-+++-++++--+++-++++++-+-++++++-++-+-++++--+++-\|     |  |    ||| ||||| | |||||||  ||||| || | 
||||||  /+-+-+-++-++-++++-++++-+-++++++++-+-++--+-+++++++-+++-++++--+++-++++++-+-++++++-++-+-++++--+++-++-----+\ |    ||| ||||| | |||||||  ||||| || | 
||||||  || | | || || |||| |||| | |||||||| v ||  | \++++++-+++-++++--/|| ||\+++-+-++++++-++-+-++++--+++-++-----++-+----+++-++++/ | |||\+++--++++/ || | 
||||||  || | | || || |||| |||| | |||||||| | ||  |  |||||| ||| ||||   |\-++-+++-+-+++++/ || | ||||  ||| ||     || |    ||| ||||  | ||| |||  ||||  || | 
||||||  || | | || || |||| |||| | |||||||| | ||  |  |||||| ||| |||| /-+--++-+++-+-+++++--++-+-++++--+++-++-\   || |    ||| ||||  | ||| |||  ||||  || | 
||||||  || | | || || |||| |||| | |||||||| | ||  |  |\++++-+++-++++-+-+--++-+++-+-+++++--++-+-+++/  ||| || |   || |    ||| ||||  | ||| |||  ||||  || | 
||||||  || | | || || |||| |||| | |||||||| | ||  |  | |||| ||| |||| | |  \+-+++-+-+++++--++-+-+++---+++-++-+---++-+----/|| ||||  | |||/+++--++++\ || | 
||||||  || | | || || |||| |||| | |||||||| | ||  |  | |||| ||| |||| | |   | ||| | |||||  || | |||   ||| || |   || |     || ||||  | |||||||  ||||| || | 
||||||  || | | || || |||| |||| |/++++++++-+-++--+--+-++++-+++-++++-+-+---+-+++-+-+++++--++-+-+++---+++-++-+---++-+-\   || ||||  | |||||||  ||||| || | 
||||||  || | | || || ||\+-++++-++++++++++-+-++--+--+-++++-+++-++++-+-+---+-+++-+-+++++--++-+-+++---+++-++-+---++-+-+---++-++++--+-/||||||  ||||| || | 
||||||  || | | || || || | |||| ||||||\+++-+-++--+--+-++++-+++-++++-+-+---+-+++-+-+++++--++-+-+++---+++-++-+---++-+-+---++-++++--+--++++++--+++/| || | 
||||||  || | | || || || | |||| |||||| ||| | ||/-+--+-++++-+++-++++-+-+-\ | ||| | |||||  || | |||   ||| || |   || | |   || ||||  |  ||||||  ||| | || | 
||||||  || | | || || || |/++++-++++++-+++-+<+++-+--+-++++-+++-++++-+-+-+-+-+++-+-+++++--++-+\|||   ||| || |   || | |   || ||||  |  ||||||  ||| | || | 
||||||  || | | |\-++-++-++++++-++++++-+++-+-+++-+--+-++++-+++-++++-+-+-+-+-+++-+-+++++--++-+++++---+++-++-+---++-+-+---++-++/|  |  ||||||  ||| | || | 
\+++++--++-+-+-+--++-++-++++++-++++++-+++-+-+++-+--+-++++-+++-++++-+-+-+-+-+++-+-+++++--++-+++/|/--+++-++-+---++-+-+---++-++-+--+--++++++--+++\| || | 
 ||||| /++-+-+-+--++-++-++++++-++++++-+++-+\||| |  | |||| ||| |||| | | | |/+++-+-+++++\ || ||| ||  ||| || | /-++-+-+---++-++-+--+--++++++--+++++-++\| 
 ||||| ||| | | |  \+-++-++++++-++/||| ||| ||||| |  | |||| ||| |||| | | | ||||| | |||||| || ||| ||  ||| || | | || | |   || || |  |  ||||||  ||||| |||| 
 ||||| ||| | | |   | || |||||| || ||| ||| \++++-+--+-++++-+++-+++/ | | | ||||| | |||||| || ||| ||  ||| || | | || | |   || || \--+--++++++--+/||| |||| 
 ||||| ||| | | |   | || ||||||/++-+++-+++--++++-+--+-++++-+++-+++--+-+-+-+++++-+-++++++-++-+++-++--+++-++-+-+-++-+-+\  || ||    |  ||||||  | ||| |||| 
 ||||| ||| | | |   | || ||||||||| ||| |||  |||| |  | |||| ||| ||| /+-+-+-+++++-+-++++++-++-+++-++--+++-++-+-+-++-+-++--++-++----+--++++++--+-+++\|||| 
 ||||| ||| | | |   | || ||||||||\-+++-+++--++++-+--+-++++-+++-+++-++-+-+-+++++-+-++++++-++-+++-++--+++-++-+-+-++-+-/|  || ||    |  ||\+++--+-++/||||| 
 ||||| ||| | | |   | || ||||||||/-+++-+++-\|||| |  | |||| ||| ||\-++-+-+-+++++-+-++++++-++-+++-++--+/| || | | || |  |  || ||    |  || |||  | || ||||| 
 ||||| ||| | | |   | |\-+++++++/| |||/+++-+++++-+--+\|||| ||| ||  || | | ||||| | |||||| || ||| ||  | | || | | || |  |  || ||    |  || |||  \-++-++++/ 
 ||||| ||| | | |   | |  ||||||| | ||||||| ||||| |  |||||| ||| |\--++-+-+-+++++-+-++++++-++-+++-++--+-+-++-+-+-++-+--+--++-+/    |  || |||    || ||||  
 ||||| ||| | | |   | |  ||||\++-+-+++++/| ||||| |  |||||| ||| |   || | | ||||| |/++++++-++-+++-++--+-+-++-+-+-++-+--+-\|| |     |  || |||    || ||||  
 ||||| ||| | | |   | |  |||| || | ||||| | ||||| |  |||||| ||| |   || | | ||||| ||\+++++-++-+++-++--+-+-++-+-+-++-+--+-+/| |     |  || |||    || ||||  
 ||||| ||| | | |   | |  |||| || | ||||| | ||||| |  |||||| ||| |   || | | ||||| || ||||| || ||| ||  | | || | | || |  | | | |     |  || |||    || ||||  
 ||||| ||| | | |   | |  |||| || | ||||| | ||||| |  |||||| ||| |   || | | ||||| || ||||| || ||| |\--+-+-++-+-+-++-+--+-+-+-+-----+--++-+++----+/ ||||  
 ||||| ||| | \-+---+-+--++++-++-+-/\+++-+-+++++-+--++++++-+++-+---++-+-+-+++++-++-+++++-++-+++-+---+-+-++-+-+-++-+--+-+-+-+-----/  || |||    |  ||||  
 ||||| ||| |   |   | |  |||| || |   ||| | ||||| |  |||\++-+++-+---++-+-+-+++++-++-+++++-++-+++-+---+-/ || | | || |  | | | |        || |||    |  ||||  
 ||||| ||| | /-+---+-+--++++-++-+-\ ||| | ||||| |  ||| \+-+++-+---++-+-+-+++++-++-+++++-++-+++-+---+---++-+-+-++-+--+-+-+-+--------++-+++----+--+/||  
 ||||| ||| | | |   | |  |||| || | | ||| | ||||| |  |||  | ||| |   || | | |||||/++-+++++-++-+++-+---+---++-+-+-++-+--+-+-+-+-------\|| |||    |  | ||  
 ||||| ||| | | |   | |  |||| || | | |||/+-+++++-+--+++--+-+++-+---++-+-+-++++++++-+++++\|| ||| |   |   || | | || |  | | | |       ||| |||    |  | ||  
 ||||| ||| | | |   | |  |||| || | | ||||| ||||| |  |||  | ||| |   || | | |||||||| |||||||| ||| |/--+---++-+-+-++-+--+-+-+-+-------+++-+++----+-\| ||  
 |||\+-+++-+-+-+---+-+--++++-++-+-+-+++++-+++++-+--+++--+-+++-+---++-+-+-++++++++-++++++++-+++-++--/   || | | || |  | | | |       ||| |||    | || ||  
 ||| | ||| | | |   | |  |||| || | | ||||| ||||| |  |||  | ||| |   || | | |||||||| |||||||| ||| ||      || | | || |  | | | |       ||| |||    | || ||  
 ||| | ||| | | |   | |  |||| || | |/+++++-+++++-+--+++--+-+++-+---++-+-+>++++++++\|||||||| ||| ||      || | | || |  | | | |       ||| |||    | || ||  
 ||| | ||| | | |   | |  |||| || | ||||||| ||||| |  |||  | ||| \---++-+-+-++++++++++++++++/ ||| ||      || | | || |  | | | |       ||| |||    | || ||  
 ||| | ||| | | |   | |  |||| || | ||||||| ||||| |  |||  | |||     || | | ||||||||||||||||  ||| ||      || | | || |  | | | |       ||| |||    | || ||  
 ||| | ||| | | |   | |  |||| || | ||||||| ||||| |  |||  | |||     || | | ||||||||||||||||  ||\-++------++-+-+-++-+--+-+-+-+-------+++-+++----/ || ||  
 ||| | ||| | \-+---+-+--++++-++-+-/|||||| ||||| |  |||  | \++-----++-+-+-++++++++++/|||||  ||  ||      || | | || |  | | | |/------+++-+++------++-++-\
 \++-+-+++-+---+---+-+--++++-++-+--++++++-+++++-+--+++--+--++-----++-+-+-++++/\++++-+++++--++--++------++-+-+-++-+--+-+>+-++------/|| |||      || || |
  || | ||| |   |   | |  |||| || |  ||\+++-+++++-+--+/|  |  ||     || | | ||||  |||| |||||  ||  |\------++-+-+-++-+--+-+-+-++-------++-+++------/| || |
  || | ||| |   |   | |  |||| || \--++-+++-/|\++-+--+-+--+--++-----++-+-+-++++--/||| |||||  ||  |       || | | || |  | | | ||       || |||       | || |
  || \-+++-+---+---+-+--++++-/|    || |||  | || |  | \--+--++-----++-/ | ||||   ||| |||||  ||  |   /---++-+-+-++-+--+-+-+-++-------++-+++\      | || |
/-++---+++-+---+---+-+--++++--+\   || |||  | || |  |    \--++-----++---+-++++---+++-++++/  ||  |   |   || | | || |  | | | ||       || ||||      | || |
| ||   ||| |   |   | |  ||||  ||   || ||\--+-++-+--+-------++-----++---+-++++---+++-++++---++--+---+---++-+-+-/| |  | | | ||       || ||||      | || |
| \+---+++-/   |   | |  ||||  ||   || ||   | || |  |       ||     ||   | \+++---+++-++++---++--+---+---++-+-+--+-+--+-+-+-++-------++-+/||      | || |
|  |   |||     |   | |  ||||  ||   || ||   | || |  |       \+-----++---+--+++---+++-++++---++--+---+---++-+-+--+-+--+-+-+-++-------+/ | ||      | || |
|  |   |||     |   | |  ||||  \+---++-++---+-++-+--+--------+-----++---+--+++---+++-++++---++--+---+---++-+-+--+-+--/ | | ||       |  | ||      | || |
|  |   |||     |   | |  ||||   |   || ||   | \+-+--+--------+-----++---+--+++---+++-++++---/|  |   |   || | |  | |    | | ||       |  | ||      | || |
|  |   |||     |   | |  \+++---+---++-++---+--+-+--+--------/     ||   |  ||\---+++-++++----+--+---+---++-+-+--+-+----+-+-++----->-+--+-++------+-/| |
|  |   |||     |   | \---+++---+---++-++---+--+-+--/              |\---+--++----+++-++++----+--+---+---++-/ |/-+-+----+-+-++-------+--+-++--\   |  | |
|  |   |||     |   |     |||   |   || ||   |  | |                 |    |  ||    ||| \+++----+--+---+---++---++-+-+----+-+-++-------+--+-/|  |   |  | |
|  |   |||     |   |     |||   |   || ||   |  | |                 |    |  ||    |||  |||    |  |   |   ||   \+-+-+----+-+-++-------+--+--+--+---+--/ |
|  |   |||     |   |     |||   |   || ||   |  | |                 |    |  ||    |||  |||    |  |   |   ||    | | |    | | ||       |  |  |  |   |    |
|  |   |||     | /-+-----+++---+---++-++---+--+-+-----------------+----+--++----+++--+++---\|  |   |   ||    | | |    | | ||       |  |  |  |   |    |
|  |   |\+-----+-+-+-----+++---+---++-++---+--+-+-----------------+----+--++----+++--+++---++--+---+---++----+-//+----+-+-++-------+--+--+--+---+---\|
|  |   | |     | | |     |||   |   || ||   |  | |                 \----+--++----+++--+++---++--+---+---++----+--++----+-+-++-------+--+--+--+---/   ||
|  |/--+-+-----+-+-+-----+++---+---++-++---+--+-+----------------------+--++----+++--+++---++--+---+--<++----+\ ||/---+-+-++-------+--+--+--+------\||
|  ||  | |     | | |     |||   |   || |\---+--+-+----------------------+--++----+++--++/   ||  |   |   ||    || |||   | | ||       |  |  |  |      |||
|  ||  | |     | | |     |||   |   || |    |  | |                      |  ||    \++--++----++--+---+---++----++-+++---/ | ||       |  |  |  |      |||
|  ||  | |    /+-+-+-----+++---+---++-+----+--+-+-------------\        |  ||     ||  ||    ||  |   |   |\----++-+++-----+-/|       |  |  |  |      |||
|  ||  | |    || | |     |||   |   |\-+----+--+-+-------------+--------+--++-----++--++----++--/   |   |     || |||     |  |       |  |  |  |      |||
|  \+--+-+----+/ | |     |||   |   |  \----+--+-+-------------+--------+--++-----++--++----++------+---+-----++-+/|     |  |       |  |  |  |      |||
|   |  | |    |  | |     |||   |   |       |  | |             |        |  ||     ||  ||    ||      |   |     || | |     |  |       |  |  |  |      |||
|   |  | |    |  | |     |||   |   \-------+--+-+-------------+--------+--++-----/|  ||    ||      |   |     \+-+-+-----+--+-------+--+--+--/      |||
|   |  | |    |  | |     |||   |           |  | |    /--------+--------+--++------+--++----++------+---+------+-+-+-----+--+--\    |  |  |         |||
|   |  | |    |  | |     \++---+-----------+--+-+----+--------+--------+--++------+--++----+/      |   |      | | |  /--+--+--+----+--+--+------\  |||
\---+--+-+----+--+-+------++---/           |  | |    |        |        |  ||      \--++----+-------+---+------+-+-+--+--/  |  |    |  |  |      |  |||
    |  \-+----+--+-+------++---------------/  | |    |        |    /---+--++---------++----+----\  \---+------+-+-+--+->---+--+----+--+--/      |  |||
    |    |    |  | |      |\------------------+-+----+--------+----+---+--++---------++----+----+------+------+-+-+--+-----+--+----/  |         |  |||
    |    |    |  | |      |                   | \----+--------+----+---+--++---------++----+----+------/      | | |  |     |  |       |         |  |||
    |    |    |  | |      |/------------------+------+--------+----+---+--++---------++----+----+------\      | | |  |     |  |       |         |  |||
    |    |    |  | |      ||                  | /----+--------+----+---+--++---------++----+----+------+------+-+-+--+-----+--+-------+---------+\ |||
    |    |    |  \-+------++------------------+-+----+--------+----+---+--++---------++----/    |      |      |/+-+--+-----+--+-----\ |         || |||
    |    |    \----+------++------------------+-+----+--------/    |   |  \+---------+/         |      |      ||\-+--+-----+--+-----+-+---------++-+/|
    \----+---------+------++------------------+-+----+-------------+---+---+---------+----------+------+------/|  \--+-----+--+-----+-+---------++-/ |
         |         |      ||                  | |    |             |   |   \---------+----------+------+-------+-----+-----+--+-----+-/         ||   |
         |         |      ||                  | |    |             \---+-------------+----------/      |       |     \-----+--+-----+-----------/|   |
         \---------/      \+------------------+-+----+-----------------+------------</                 |       |           |  |     |            |   |
                           |                  \-+----+-----------------/                               |       |           |  |     |            |   |
                           |                    |    \-------------------------------------------------+-------+-----------+--/     |            |   |
                           |                    |                                                      |       |           \--------+------------+---/
                           |                    \------------------------------------------------------+-------+--------------------+------------/    
                           \---------------------------------------------------------------------------/       \--------------------/                 ';

/*$trackGridInput = 
'/->-\        
|   |  /----\
| /-+--+-\  |
| | |  | v  |
\-+-/  \-+--/
  \------/   ';
 * 
 */


$trackGridInputRows = explode("\n",$trackGridInput);
$trackGridInputArray = array();
$cartDirectionArray = array ("v","^","<",">");
$cartTurningArray = array ("L","S","R");
$cartArray = array();
foreach($trackGridInputRows as $rowID => $rowValue) {
    $splitRowValues = str_split($rowValue,1);
    $trackColumnCount = count($splitRowValues);
    foreach($splitRowValues as $splitRowCharacterID => $splitRowCharacterValue) {
        $trackGridInputArray[$rowID][$splitRowCharacterID] = $splitRowCharacterValue;
    }
}
$trackRowCount = count($trackGridInputRows);

printGrid($trackGridInputArray);
echo "<br><br>";
$countIssues = array();
$tickCounter = 1;
$firstCrashPosition = "";
$iteration0=$trackGridInputArray;
$updatedTrackGridInputArray = $trackGridInputArray;
$startingCartCount=0;
$lastRound=0;
$haveUpdatedLocation = array();
while($tickCounter <= 20000) {
    
    $columnCounter = 0;
    $rowCounter = 0;
    $cartCount=0;
    echo "Iteration: $tickCounter<br>";
    if($startingCartCount==1) {
        // One cart left, last round!
        $lastRound = 1;
    }
    while($rowCounter < $trackRowCount) {
        
        while($columnCounter < $trackColumnCount) {
            
            $gridCheckPositionValue = $trackGridInputArray[$rowCounter][$columnCounter];
            $cartPosition = array_search($gridCheckPositionValue, $cartDirectionArray);
            //echo "<br> :: $rowCounter,$columnCounter - $gridCheckPositionValue :: $cartPosition <br>";
            if($cartPosition > -1) {
                $cartCount++;
                $lastCartPosition="$columnCounter,$rowCounter";
				if(isset($haveUpdatedLocation[$rowCounter.",".$columnCounter]) && $haveUpdatedLocation[$rowCounter.",".$columnCounter]==$tickCounter) {
					continue;
				}
                // It's a cart. We must do something!
                // Let's see if we already know about this cart! 
                if(isset($cartArray[$rowCounter][$columnCounter])) {
                    // We know about it!!
                    //echo "we know u?";
                } else {
                    // We do not know about it - add it to the array!!
                    if(!isset($cartArray[$rowCounter])) $cartArray[$rowCounter] = array();
                    $cartArray[$rowCounter][$columnCounter] = 0;
                }
                // print_r($cartArray);
                // First, lets check if we're dealing with a corner or a straight, so we know what to replace it with
                
                if($rowCounter==0) {
                    // It's a top row
                } elseif ($rowCounter==$trackRowCount) {
                    // It's a bottom row item
                }
                
                if($columnCounter==0) {
                    // It's a first column
                } elseif ($columnCounter==$trackColumnCount) {
                    // It's a last column item
                }
                
                if($gridCheckPositionValue=="v") { 
                    $targetGridX = $rowCounter+1;
                    $targetGridY = $columnCounter;
                    $targetGridValue = $updatedTrackGridInputArray[$rowCounter+1][$columnCounter];
                } elseif($gridCheckPositionValue==">") {                    
                    $targetGridX = $rowCounter;
                    $targetGridY = $columnCounter+1;
                    $targetGridValue = $updatedTrackGridInputArray[$rowCounter][$columnCounter+1];
                } elseif($gridCheckPositionValue=="<") {                                        
                    $targetGridX = $rowCounter;
                    $targetGridY = $columnCounter-1;
                    $targetGridValue = $updatedTrackGridInputArray[$rowCounter][$columnCounter-1];
                } else {                    
                    $targetGridX = $rowCounter-1;
                    $targetGridY = $columnCounter;
                    $targetGridValue = $updatedTrackGridInputArray[$rowCounter-1][$columnCounter];
                    if($targetGridX<0 || $targetGridY<0) {
                        echo "something went wrong? $rowCounter,$columnCounter - $targetGridX,$targetGridY<br>";
                        printGrid($trackGridInputArray);
                    }
                }
                //echo "Found a cart at $rowCounter,$columnCounter facing $gridCheckPositionValue<br>";
                // Need to calculate what to change the current grid item to
                $currentGridPositionValue = $updatedTrackGridInputArray[$rowCounter][$columnCounter];
                $topMiddleGridValue = ($updatedTrackGridInputArray[$rowCounter-1][$columnCounter] ?? null);
                $topLeftGridValue = ($updatedTrackGridInputArray[$rowCounter-1][$columnCounter-1] ?? null);
                $topRightGridValue = ($updatedTrackGridInputArray[$rowCounter-1][$columnCounter+1] ?? null);
                $leftGridValue = ($updatedTrackGridInputArray[$rowCounter][$columnCounter-1] ?? null);
                $rightGridValue = ($updatedTrackGridInputArray[$rowCounter][$columnCounter+1] ?? null);
                $bottomMiddleGridValue = ($updatedTrackGridInputArray[$rowCounter+1][$columnCounter] ?? null);
                $bottomLeftGridValue = ($updatedTrackGridInputArray[$rowCounter+1][$columnCounter-1] ?? null);
                $bottomRightGridValue = ($updatedTrackGridInputArray[$rowCounter+1][$columnCounter+1] ?? null);
                
                $trackBothSides = ($leftGridValue!=null && $leftGridValue!=" " && $leftGridValue!="|") && ($rightGridValue!=null && $rightGridValue!=" " && $rightGridValue!="|");
                $trackAboveBelow = ($topMiddleGridValue!=null && $topMiddleGridValue!=" " && $topMiddleGridValue!="-") && ($bottomMiddleGridValue!=null && $bottomMiddleGridValue!=" " && $bottomMiddleGridValue!="-");
                $trackLeftSides = ($leftGridValue!=null && $leftGridValue!=" " && $leftGridValue!="|") && !($rightGridValue!=null && $rightGridValue!=" " && $rightGridValue!="|");
                $trackRightSides = !($leftGridValue!=null && $leftGridValue!=" " && $leftGridValue!="|") && ($rightGridValue!=null && $rightGridValue!=" " && $rightGridValue!="|");
                $trackBelow = ($topMiddleGridValue!=null && $topMiddleGridValue!=" " && $topMiddleGridValue!="-") && !($bottomMiddleGridValue!=null && $bottomMiddleGridValue!=" " && $bottomMiddleGridValue!="-");
                $trackAbove = !($topMiddleGridValue!=null && $topMiddleGridValue!=" " && $topMiddleGridValue!="-") && ($bottomMiddleGridValue!=null && $bottomMiddleGridValue!=" " && $bottomMiddleGridValue!="-");
                
                if($iteration0[$rowCounter][$columnCounter]!="<" && $iteration0[$rowCounter][$columnCounter]!=">" && $iteration0[$rowCounter][$columnCounter]!="v" && $iteration0[$rowCounter][$columnCounter]!="^") {
                    $updatedTrackGridInputArray[$rowCounter][$columnCounter] = $iteration0[$rowCounter][$columnCounter];
                } elseif($trackBothSides && $trackAboveBelow) {
                    // Intersection!
                    $updatedTrackGridInputArray[$rowCounter][$columnCounter] = "+";    
                } elseif($trackBothSides){
                    $updatedTrackGridInputArray[$rowCounter][$columnCounter] = "-";
                } elseif($trackAboveBelow && ($trackGridInputArray[$rowCounter][$columnCounter]=="v" || $trackGridInputArray[$rowCounter][$columnCounter]=="^")){
                    // There is track to both sides that is relevant to this move, so keep going
                    $updatedTrackGridInputArray[$rowCounter][$columnCounter] = "|";
                } elseif($trackAboveBelow && $trackGridInputArray[$rowCounter][$columnCounter]==">"){
                    // There is track to both sides that is relevant to this move, so keep going
                    $updatedTrackGridInputArray[$rowCounter][$columnCounter] = "\\";
                } elseif($trackAboveBelow && $trackGridInputArray[$rowCounter][$columnCounter]=="<"){
                    // There is track to both sides that is relevant to this move, so keep going
                    $updatedTrackGridInputArray[$rowCounter][$columnCounter] = "/";
                } elseif(($trackLeftSides && $trackBelow) || ($trackRightSides && $trackAbove)){
                    // There is track above/below that is relevant to this move, so keep going
                    $updatedTrackGridInputArray[$rowCounter][$columnCounter] = "/";
                    //echo "here";
                } elseif(($trackLeftSides && $trackAbove) || ($trackRightSides && $trackBelow)){
                    // There is track above/below that is relevant to this move, so keep going
                    $updatedTrackGridInputArray[$rowCounter][$columnCounter] = "\\";  
                    //echo "here2";                  
                } 
                
               // echo "Need to update cart's current grid position to be ".$updatedTrackGridInputArray[$rowCounter][$columnCounter]."<br>";
                // Need to calculate what to change the target grid item to
               // echo $updatedTrackGridInputArray[$targetGridX][$targetGridY] - in_array($updatedTrackGridInputArray[$targetGridX][$targetGridY], $cartDirectionArray);
                //print_r($cartDirectionArray);
                if(in_array($targetGridValue, $cartDirectionArray) && in_array($updatedTrackGridInputArray[$targetGridX][$targetGridY], $cartDirectionArray)
                        || (!(in_array($targetGridValue, $cartDirectionArray)) && in_array($updatedTrackGridInputArray[$targetGridX][$targetGridY], $cartDirectionArray))) {
                    // Cart is there, make it an X!
                    printGrid($trackGridInputArray);
                    $updatedTrackGridInputArray[$targetGridX][$targetGridY] = $iteration0[$targetGridX][$targetGridY];
                    if($iteration0[$targetGridX][$targetGridY]=="<" || $iteration0[$targetGridX][$targetGridY]==">" || $iteration0[$targetGridX][$targetGridY]=="v" || $iteration0[$targetGridX][$targetGridY]=="^") {
                        echo "<br><br>CRASH SAME PLACE AS STARTING CART<br><br>";
                    }
                    echo "<br>Crash found at $targetGridY,$targetGridX. Current value: ".$updatedTrackGridInputArray[$targetGridX][$targetGridY]." or $targetGridValue :: Currently counting $startingCartCount cars remaining (incluyding these 2)<br>";
                    //$updatedTrackGridInputArray[$targetGridX][$targetGridY] = "X";
                    $firstCrashPosition = "$targetGridX,$targetGridY";
                    // Found a collision, so lets stop
                    printGrid($updatedTrackGridInputArray);
                    $trackGridInputArray=$updatedTrackGridInputArray;
                    //break 3;
                } elseif($iteration0[$targetGridX][$targetGridY]==" "){
                    echo "<br>something went wrong at $targetGridY,$targetGridX - $gridCheckPositionValue<br>";
                    printGrid($trackGridInputArray);
                    printGrid($updatedTrackGridInputArray);

                } elseif($targetGridValue=="|" && ($trackGridInputArray[$rowCounter][$columnCounter]=="^" || $trackGridInputArray[$rowCounter][$columnCounter]=="v")) {
                    // It's a straight vertical line and our target is going up/down, so keep it as is
                    $updatedTrackGridInputArray[$targetGridX][$targetGridY] = $trackGridInputArray[$rowCounter][$columnCounter];
                } elseif($targetGridValue=="-" && ($trackGridInputArray[$rowCounter][$columnCounter]=="<" || $trackGridInputArray[$rowCounter][$columnCounter]==">")) {
                    // It's a straight horizontal line and our target is going left/right, so keep it as is
                    $updatedTrackGridInputArray[$targetGridX][$targetGridY] = $trackGridInputArray[$rowCounter][$columnCounter];
                } elseif($targetGridValue=='\\' && $trackGridInputArray[$rowCounter][$columnCounter]=="<") {
                    $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "^";
                } elseif($targetGridValue=='\\' && $trackGridInputArray[$rowCounter][$columnCounter]=="^"){
                    $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "<";                        
                } elseif($targetGridValue=='\\' && $trackGridInputArray[$rowCounter][$columnCounter]==">"){
                    $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "v";                        
                } elseif($targetGridValue=='\\' && $trackGridInputArray[$rowCounter][$columnCounter]=="v"){
                    $updatedTrackGridInputArray[$targetGridX][$targetGridY] = ">";                        
                } elseif($targetGridValue=='/' && $trackGridInputArray[$rowCounter][$columnCounter]==">") {
                    $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "^";
                } elseif($targetGridValue=='/' && $trackGridInputArray[$rowCounter][$columnCounter]=="v"){
                    $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "<";                        
                } elseif($targetGridValue=='/' && $trackGridInputArray[$rowCounter][$columnCounter]=="^"){
                    $updatedTrackGridInputArray[$targetGridX][$targetGridY] = ">";                        
                } elseif($targetGridValue=='/' && $trackGridInputArray[$rowCounter][$columnCounter]=="<"){
                    $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "v";                        
                } elseif($targetGridValue=='+') {
                    // $cartDirectionArray = array ("v","^","<",">");
                    // $cartTurningArray = array ("<","|",">");
                    // $cartArray
                   // print_r($cartArray);
                    //echo "-".$cartArray[$rowCounter][$columnCounter]."<br>";
                    if($cartArray[$rowCounter][$columnCounter]==0) {
                        // Go left
                        if($trackGridInputArray[$rowCounter][$columnCounter]=="^") {
                            $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "<";
                        } elseif($trackGridInputArray[$rowCounter][$columnCounter]=="<") {
                            $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "v";
                        } elseif($trackGridInputArray[$rowCounter][$columnCounter]==">") {
                            $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "^";
                        } else {
                            $updatedTrackGridInputArray[$targetGridX][$targetGridY] = ">";                                                        
                        }
                        
                        $cartArray[$rowCounter][$columnCounter]=1;
                        //echo "got here <br>";
                    } elseif($cartArray[$rowCounter][$columnCounter]==1) {
                        // Go straight
                        if($trackGridInputArray[$rowCounter][$columnCounter]=="^") {
                            $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "^";
                        } elseif($trackGridInputArray[$rowCounter][$columnCounter]=="<") {
                            $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "<";
                        } elseif($trackGridInputArray[$rowCounter][$columnCounter]==">") {
                            $updatedTrackGridInputArray[$targetGridX][$targetGridY] = ">";
                        } else {
                            $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "v";                                                        
                        }
                        $cartArray[$rowCounter][$columnCounter]=2;
                        
                       // echo "got here3 <br>";
                    } elseif($cartArray[$rowCounter][$columnCounter]==2) {
                        // Go right
                        //echo "got hewe";
                        if($trackGridInputArray[$rowCounter][$columnCounter]=="^") {
                            $updatedTrackGridInputArray[$targetGridX][$targetGridY] = ">";
                        } elseif($trackGridInputArray[$rowCounter][$columnCounter]=="<") {
                            $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "^";
                        } elseif($trackGridInputArray[$rowCounter][$columnCounter]==">") {
                            $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "v";
                        } else {
                            $updatedTrackGridInputArray[$targetGridX][$targetGridY] = "<";                                                        
                        }
                        $cartArray[$rowCounter][$columnCounter]=0;
                    }
                    
                    
                    
                } else {
					echo "<br>got here - starting: $rowCounter,$columnCounter updating: $targetGridX,$targetGridY :: $currentGridPositionValue :: Updated Target:".$updatedTrackGridInputArray[$targetGridX][$targetGridY]." :: Starting Target:".$trackGridInputArray[$targetGridX][$targetGridY]." :: Starting existing:".$trackGridInputArray[$rowCounter][$columnCounter]."<br>";
					echo $haveUpdatedLocation[$rowCounter.",".$columnCounter]." - $tickCounter - ".$haveUpdatedLocation[$targetGridX.",".$targetGridY]."<br>";                    
                    echo in_array($targetGridValue, $cartDirectionArray) . " - " . in_array($updatedTrackGridInputArray[$targetGridX][$targetGridY], $cartDirectionArray) . "<br>";
					
					printGrid($trackGridInputArray);
                    
                    $updatedTrackGridInputArray[$targetGridX][$targetGridY] = $currentGridPositionValue;
					printGrid($trackGridInputArray);
                    printGrid($updatedTrackGridInputArray);
                }
				$haveUpdatedLocation[$targetGridX.",".$targetGridY]=$tickCounter;
                if(!isset($cartArray[$targetGridX])) $cartArray[$targetGridX] = array(); // Just checking the X part of the array exists, and if not, creating it
                $cartArray[$targetGridX][$targetGridY] = $cartArray[$rowCounter][$columnCounter];
               // print_r($cartArray);
                // If we have the need to allow multiple collisions in the future, this will cause an issue as it's going to be already set!
                unset($cartArray[$rowCounter][$columnCounter]);
                if(empty($cartArray[$rowCounter])) unset($cartArray[$rowCounter]);  
                //echo "Need to update cart's new grid position which is $targetGridX,$targetGridY  to be ".$trackGridInputArray[$targetGridX][$targetGridY]."<br><br>";
               
                //printGrid($updatedTrackGridInputArray);
            }
            
            $columnCounter++;
        }
        
        $rowCounter++;
        $columnCounter=0;
    }
    $trackGridInputArray = $updatedTrackGridInputArray;
    $startingCartCount = $cartCount;
    
    
    if($lastRound>0) {
        // It's all over, should just find the cart and end it
        echo "Final cart has finished at $lastCartPosition on iteration $tickCounter <br>";
        break;
    }
    
    echo "Starting new iteration - cartCount at $startingCartCount - $lastCartPosition<Br>";
    $tickCounter++;
    //printGrid($updatedTrackGridInputArray);
}

function printGrid($trackGridInputArray) {
    $trackGridInputArray;
    echo "<code>";
    foreach($trackGridInputArray as $rowID => $rowColumn) {
        foreach ($rowColumn as $columnID => $thedata){
            if($thedata==" ") $thedata = "&nbsp;";
            echo "$thedata ";
        }
        echo "<br>";
    }
    echo "</code>";
    
}

//printGrid($trackGridInputArray);
$c=0;$r=0;
while($c < $trackRowCount) {
    while ($r < $trackColumnCount)  {
        
        if($iteration0[$c][$r]!=" " && $iteration0[$c][$r]!=$trackGridInputArray[$c][$r]) {
            echo "<br>Original grid location $c,$r was empty and is now not - was ".$iteration0[$c][$r]." and is now ".$trackGridInputArray[$c][$r].";";
        }
        
        $r++;     
    }
    $c++;
    $r=0;
}

printGrid($updatedTrackGridInputArray);


$var = print_r($countIssues,true);
//echo "<pre>$var</pre>";  
echo "<br>Found a collision on iteration $tickCounter at position $firstCrashPosition<br>";
$var = print_r($trackGridInputArray,true);
//echo "<pre>$var</pre>";  


