<?php

$puzzleInput = 'Before: [1, 1, 1, 0]
4 1 0 0
After:  [1, 1, 1, 0]

Before: [1, 1, 0, 1]
5 1 3 3
After:  [1, 1, 0, 1]

Before: [3, 2, 3, 1]
14 2 1 3
After:  [3, 2, 3, 2]

Before: [0, 1, 2, 1]
5 1 3 0
After:  [1, 1, 2, 1]

Before: [2, 1, 2, 3]
1 3 3 2
After:  [2, 1, 3, 3]

Before: [1, 0, 2, 0]
11 0 2 1
After:  [1, 2, 2, 0]

Before: [1, 2, 1, 1]
8 2 3 0
After:  [1, 2, 1, 1]

Before: [1, 0, 3, 2]
10 0 3 3
After:  [1, 0, 3, 3]

Before: [0, 1, 3, 1]
3 0 0 0
After:  [0, 1, 3, 1]

Before: [2, 1, 3, 2]
15 0 1 2
After:  [2, 1, 3, 2]

Before: [2, 1, 2, 1]
1 2 0 2
After:  [2, 1, 2, 1]

Before: [0, 0, 2, 0]
3 0 0 2
After:  [0, 0, 0, 0]

Before: [1, 1, 3, 2]
10 0 3 3
After:  [1, 1, 3, 3]

Before: [2, 3, 2, 3]
14 3 2 3
After:  [2, 3, 2, 2]

Before: [0, 1, 3, 2]
10 1 3 0
After:  [3, 1, 3, 2]

Before: [1, 1, 1, 0]
4 1 0 2
After:  [1, 1, 1, 0]

Before: [1, 2, 3, 2]
12 2 2 3
After:  [1, 2, 3, 2]

Before: [3, 2, 1, 1]
8 2 3 3
After:  [3, 2, 1, 1]

Before: [0, 1, 3, 2]
10 1 3 2
After:  [0, 1, 3, 2]

Before: [0, 3, 3, 0]
12 2 2 3
After:  [0, 3, 3, 2]

Before: [2, 2, 2, 0]
1 2 0 0
After:  [2, 2, 2, 0]

Before: [0, 2, 0, 3]
11 3 3 2
After:  [0, 2, 9, 3]

Before: [0, 1, 3, 2]
6 3 1 1
After:  [0, 3, 3, 2]

Before: [1, 0, 2, 0]
2 2 3 0
After:  [3, 0, 2, 0]

Before: [3, 3, 1, 1]
8 2 3 1
After:  [3, 1, 1, 1]

Before: [0, 1, 0, 2]
3 0 0 0
After:  [0, 1, 0, 2]

Before: [1, 1, 3, 2]
10 0 3 0
After:  [3, 1, 3, 2]

Before: [0, 0, 1, 1]
3 0 0 2
After:  [0, 0, 0, 1]

Before: [0, 1, 1, 2]
3 0 0 2
After:  [0, 1, 0, 2]

Before: [0, 1, 1, 1]
3 0 0 3
After:  [0, 1, 1, 0]

Before: [1, 1, 1, 1]
5 1 3 1
After:  [1, 1, 1, 1]

Before: [1, 1, 3, 3]
4 1 0 3
After:  [1, 1, 3, 1]

Before: [3, 3, 1, 1]
13 2 3 3
After:  [3, 3, 1, 3]

Before: [3, 1, 1, 3]
9 2 3 0
After:  [3, 1, 1, 3]

Before: [1, 1, 2, 0]
11 1 2 1
After:  [1, 2, 2, 0]

Before: [2, 3, 2, 2]
1 2 0 2
After:  [2, 3, 2, 2]

Before: [0, 3, 2, 3]
1 2 0 1
After:  [0, 2, 2, 3]

Before: [1, 1, 2, 0]
15 1 2 1
After:  [1, 3, 2, 0]

Before: [0, 3, 1, 3]
9 2 3 1
After:  [0, 3, 1, 3]

Before: [3, 1, 2, 0]
1 2 2 3
After:  [3, 1, 2, 2]

Before: [0, 2, 1, 3]
9 2 3 0
After:  [3, 2, 1, 3]

Before: [0, 1, 0, 1]
13 1 3 3
After:  [0, 1, 0, 3]

Before: [1, 1, 1, 2]
4 1 0 0
After:  [1, 1, 1, 2]

Before: [2, 2, 3, 1]
6 3 2 0
After:  [3, 2, 3, 1]

Before: [3, 3, 1, 2]
10 2 3 1
After:  [3, 3, 1, 2]

Before: [3, 2, 3, 3]
11 3 3 1
After:  [3, 9, 3, 3]

Before: [0, 0, 2, 3]
11 3 3 3
After:  [0, 0, 2, 9]

Before: [0, 1, 0, 0]
0 3 1 3
After:  [0, 1, 0, 1]

Before: [3, 3, 0, 3]
11 0 3 0
After:  [9, 3, 0, 3]

Before: [2, 1, 3, 1]
5 1 3 1
After:  [2, 1, 3, 1]

Before: [1, 1, 2, 3]
4 1 0 1
After:  [1, 1, 2, 3]

Before: [2, 3, 3, 3]
11 0 3 0
After:  [6, 3, 3, 3]

Before: [1, 2, 2, 1]
13 0 3 2
After:  [1, 2, 3, 1]

Before: [0, 1, 3, 2]
3 0 0 3
After:  [0, 1, 3, 0]

Before: [3, 2, 3, 2]
14 2 3 3
After:  [3, 2, 3, 2]

Before: [1, 1, 2, 2]
6 3 1 2
After:  [1, 1, 3, 2]

Before: [0, 2, 3, 2]
3 0 0 1
After:  [0, 0, 3, 2]

Before: [3, 2, 2, 3]
14 3 2 2
After:  [3, 2, 2, 3]

Before: [2, 1, 1, 2]
15 0 1 1
After:  [2, 3, 1, 2]

Before: [1, 1, 1, 3]
4 1 0 3
After:  [1, 1, 1, 1]

Before: [1, 3, 2, 3]
1 2 2 0
After:  [2, 3, 2, 3]

Before: [1, 1, 2, 1]
4 1 0 0
After:  [1, 1, 2, 1]

Before: [1, 1, 3, 1]
13 0 3 1
After:  [1, 3, 3, 1]

Before: [1, 0, 2, 1]
8 3 3 1
After:  [1, 1, 2, 1]

Before: [3, 3, 2, 1]
6 3 2 1
After:  [3, 3, 2, 1]

Before: [3, 3, 2, 3]
14 0 2 2
After:  [3, 3, 2, 3]

Before: [1, 1, 1, 1]
5 1 3 0
After:  [1, 1, 1, 1]

Before: [0, 1, 2, 0]
2 2 3 0
After:  [3, 1, 2, 0]

Before: [0, 2, 1, 3]
7 0 3 2
After:  [0, 2, 0, 3]

Before: [2, 1, 0, 0]
13 1 3 1
After:  [2, 3, 0, 0]

Before: [0, 2, 2, 1]
15 0 2 1
After:  [0, 2, 2, 1]

Before: [2, 2, 3, 0]
14 2 0 3
After:  [2, 2, 3, 2]

Before: [0, 1, 3, 1]
5 1 3 0
After:  [1, 1, 3, 1]

Before: [1, 1, 3, 1]
5 1 3 0
After:  [1, 1, 3, 1]

Before: [0, 1, 3, 1]
12 2 2 1
After:  [0, 2, 3, 1]

Before: [1, 3, 2, 1]
11 1 2 2
After:  [1, 3, 6, 1]

Before: [3, 2, 3, 0]
2 1 3 3
After:  [3, 2, 3, 3]

Before: [0, 1, 3, 1]
5 1 3 1
After:  [0, 1, 3, 1]

Before: [1, 2, 2, 2]
11 0 2 1
After:  [1, 2, 2, 2]

Before: [3, 0, 2, 1]
6 3 2 1
After:  [3, 3, 2, 1]

Before: [1, 1, 2, 0]
4 1 0 0
After:  [1, 1, 2, 0]

Before: [0, 2, 1, 0]
3 0 0 1
After:  [0, 0, 1, 0]

Before: [0, 2, 0, 0]
2 1 3 3
After:  [0, 2, 0, 3]

Before: [1, 1, 1, 0]
4 1 0 3
After:  [1, 1, 1, 1]

Before: [1, 0, 2, 2]
15 0 2 2
After:  [1, 0, 3, 2]

Before: [0, 0, 2, 1]
3 0 0 1
After:  [0, 0, 2, 1]

Before: [2, 1, 0, 3]
0 2 1 2
After:  [2, 1, 1, 3]

Before: [1, 0, 2, 0]
13 0 3 1
After:  [1, 3, 2, 0]

Before: [0, 0, 3, 3]
12 2 2 1
After:  [0, 2, 3, 3]

Before: [2, 1, 3, 1]
5 1 3 0
After:  [1, 1, 3, 1]

Before: [0, 1, 0, 3]
7 0 2 2
After:  [0, 1, 0, 3]

Before: [3, 0, 2, 0]
1 2 2 2
After:  [3, 0, 2, 0]

Before: [2, 1, 1, 1]
5 1 3 3
After:  [2, 1, 1, 1]

Before: [3, 1, 0, 2]
10 1 3 0
After:  [3, 1, 0, 2]

Before: [3, 1, 2, 0]
0 3 1 2
After:  [3, 1, 1, 0]

Before: [3, 1, 2, 1]
5 1 3 1
After:  [3, 1, 2, 1]

Before: [2, 2, 3, 1]
6 3 2 2
After:  [2, 2, 3, 1]

Before: [0, 1, 2, 1]
5 1 3 1
After:  [0, 1, 2, 1]

Before: [2, 2, 2, 3]
11 3 3 1
After:  [2, 9, 2, 3]

Before: [2, 1, 1, 2]
2 0 3 0
After:  [3, 1, 1, 2]

Before: [1, 1, 0, 2]
10 1 3 0
After:  [3, 1, 0, 2]

Before: [1, 1, 3, 1]
4 1 0 3
After:  [1, 1, 3, 1]

Before: [0, 2, 2, 1]
3 0 0 2
After:  [0, 2, 0, 1]

Before: [1, 1, 0, 2]
6 3 1 0
After:  [3, 1, 0, 2]

Before: [0, 0, 0, 3]
7 0 3 1
After:  [0, 0, 0, 3]

Before: [2, 1, 2, 2]
6 3 1 1
After:  [2, 3, 2, 2]

Before: [0, 1, 2, 1]
5 1 3 2
After:  [0, 1, 1, 1]

Before: [2, 0, 3, 3]
11 0 3 2
After:  [2, 0, 6, 3]

Before: [0, 3, 0, 0]
3 0 0 2
After:  [0, 3, 0, 0]

Before: [3, 3, 1, 2]
10 2 3 2
After:  [3, 3, 3, 2]

Before: [1, 1, 3, 0]
13 1 3 3
After:  [1, 1, 3, 3]

Before: [2, 1, 0, 1]
0 2 1 1
After:  [2, 1, 0, 1]

Before: [2, 2, 2, 1]
6 3 2 1
After:  [2, 3, 2, 1]

Before: [2, 1, 2, 0]
2 0 3 1
After:  [2, 3, 2, 0]

Before: [1, 2, 3, 3]
11 2 3 1
After:  [1, 9, 3, 3]

Before: [0, 1, 1, 0]
7 0 3 2
After:  [0, 1, 0, 0]

Before: [0, 2, 1, 1]
3 0 0 1
After:  [0, 0, 1, 1]

Before: [1, 1, 2, 3]
9 1 3 3
After:  [1, 1, 2, 3]

Before: [3, 0, 1, 3]
1 3 0 3
After:  [3, 0, 1, 3]

Before: [0, 3, 1, 2]
10 2 3 0
After:  [3, 3, 1, 2]

Before: [2, 2, 1, 3]
1 3 3 2
After:  [2, 2, 3, 3]

Before: [2, 2, 2, 1]
6 3 2 3
After:  [2, 2, 2, 3]

Before: [0, 2, 2, 2]
1 2 0 0
After:  [2, 2, 2, 2]

Before: [0, 1, 3, 2]
12 2 2 0
After:  [2, 1, 3, 2]

Before: [0, 2, 1, 0]
3 0 0 3
After:  [0, 2, 1, 0]

Before: [1, 1, 3, 1]
4 1 0 2
After:  [1, 1, 1, 1]

Before: [2, 2, 2, 1]
8 3 3 0
After:  [1, 2, 2, 1]

Before: [1, 1, 3, 1]
12 2 2 3
After:  [1, 1, 3, 2]

Before: [3, 3, 3, 1]
6 3 2 3
After:  [3, 3, 3, 3]

Before: [2, 0, 3, 2]
14 2 3 0
After:  [2, 0, 3, 2]

Before: [2, 1, 3, 2]
12 2 2 2
After:  [2, 1, 2, 2]

Before: [1, 0, 1, 1]
8 2 3 2
After:  [1, 0, 1, 1]

Before: [0, 2, 0, 2]
7 0 3 3
After:  [0, 2, 0, 0]

Before: [1, 1, 2, 3]
9 1 3 0
After:  [3, 1, 2, 3]

Before: [1, 2, 2, 1]
15 1 2 0
After:  [4, 2, 2, 1]

Before: [1, 1, 3, 3]
9 0 3 3
After:  [1, 1, 3, 3]

Before: [2, 3, 0, 3]
15 2 3 0
After:  [3, 3, 0, 3]

Before: [1, 1, 3, 3]
1 3 3 0
After:  [3, 1, 3, 3]

Before: [0, 2, 3, 2]
7 0 1 0
After:  [0, 2, 3, 2]

Before: [3, 1, 1, 0]
0 3 1 0
After:  [1, 1, 1, 0]

Before: [0, 3, 2, 0]
1 2 2 3
After:  [0, 3, 2, 2]

Before: [0, 0, 1, 1]
8 2 3 1
After:  [0, 1, 1, 1]

Before: [0, 1, 3, 0]
12 2 2 3
After:  [0, 1, 3, 2]

Before: [3, 0, 1, 2]
10 2 3 3
After:  [3, 0, 1, 3]

Before: [1, 1, 0, 0]
4 1 0 0
After:  [1, 1, 0, 0]

Before: [0, 3, 2, 3]
7 0 3 0
After:  [0, 3, 2, 3]

Before: [0, 2, 3, 0]
3 0 0 0
After:  [0, 2, 3, 0]

Before: [0, 2, 0, 3]
1 3 0 0
After:  [3, 2, 0, 3]

Before: [3, 3, 1, 2]
10 2 3 3
After:  [3, 3, 1, 3]

Before: [1, 1, 2, 2]
6 3 1 3
After:  [1, 1, 2, 3]

Before: [0, 1, 1, 2]
6 3 1 3
After:  [0, 1, 1, 3]

Before: [0, 0, 2, 3]
15 0 2 0
After:  [2, 0, 2, 3]

Before: [1, 1, 3, 2]
14 2 3 1
After:  [1, 2, 3, 2]

Before: [0, 2, 0, 1]
7 0 1 1
After:  [0, 0, 0, 1]

Before: [0, 1, 2, 1]
6 3 2 2
After:  [0, 1, 3, 1]

Before: [2, 1, 0, 0]
2 0 3 3
After:  [2, 1, 0, 3]

Before: [3, 1, 3, 1]
5 1 3 0
After:  [1, 1, 3, 1]

Before: [2, 1, 3, 1]
6 3 2 2
After:  [2, 1, 3, 1]

Before: [3, 0, 3, 1]
12 2 2 0
After:  [2, 0, 3, 1]

Before: [0, 2, 2, 3]
3 0 0 0
After:  [0, 2, 2, 3]

Before: [1, 1, 3, 2]
6 3 1 3
After:  [1, 1, 3, 3]

Before: [3, 1, 1, 2]
10 1 3 1
After:  [3, 3, 1, 2]

Before: [1, 1, 2, 3]
15 2 1 0
After:  [3, 1, 2, 3]

Before: [2, 0, 3, 3]
14 2 0 2
After:  [2, 0, 2, 3]

Before: [1, 1, 1, 2]
4 1 0 1
After:  [1, 1, 1, 2]

Before: [0, 1, 2, 0]
7 0 2 2
After:  [0, 1, 0, 0]

Before: [0, 3, 0, 3]
3 0 0 0
After:  [0, 3, 0, 3]

Before: [3, 1, 0, 0]
0 2 1 0
After:  [1, 1, 0, 0]

Before: [1, 1, 2, 0]
4 1 0 1
After:  [1, 1, 2, 0]

Before: [1, 1, 2, 0]
4 1 0 2
After:  [1, 1, 1, 0]

Before: [1, 1, 0, 2]
0 2 1 3
After:  [1, 1, 0, 1]

Before: [1, 1, 1, 2]
6 3 1 3
After:  [1, 1, 1, 3]

Before: [0, 3, 0, 2]
3 0 0 0
After:  [0, 3, 0, 2]

Before: [0, 0, 3, 2]
7 0 1 2
After:  [0, 0, 0, 2]

Before: [1, 3, 3, 2]
12 2 2 3
After:  [1, 3, 3, 2]

Before: [0, 3, 3, 2]
3 0 0 2
After:  [0, 3, 0, 2]

Before: [0, 1, 0, 3]
1 3 0 3
After:  [0, 1, 0, 3]

Before: [0, 0, 2, 3]
3 0 0 2
After:  [0, 0, 0, 3]

Before: [2, 1, 0, 2]
2 0 3 2
After:  [2, 1, 3, 2]

Before: [1, 2, 1, 3]
1 3 0 2
After:  [1, 2, 3, 3]

Before: [1, 0, 0, 3]
15 2 3 1
After:  [1, 3, 0, 3]

Before: [3, 1, 0, 3]
9 1 3 2
After:  [3, 1, 3, 3]

Before: [0, 0, 0, 0]
7 0 1 2
After:  [0, 0, 0, 0]

Before: [0, 2, 3, 0]
14 2 1 1
After:  [0, 2, 3, 0]

Before: [2, 0, 2, 1]
6 3 2 2
After:  [2, 0, 3, 1]

Before: [2, 1, 1, 1]
8 2 3 0
After:  [1, 1, 1, 1]

Before: [1, 0, 3, 3]
12 2 2 1
After:  [1, 2, 3, 3]

Before: [0, 0, 3, 1]
3 0 0 1
After:  [0, 0, 3, 1]

Before: [1, 1, 3, 1]
4 1 0 0
After:  [1, 1, 3, 1]

Before: [1, 3, 2, 1]
14 1 2 3
After:  [1, 3, 2, 2]

Before: [2, 1, 2, 3]
9 1 3 1
After:  [2, 3, 2, 3]

Before: [2, 1, 0, 0]
0 2 1 0
After:  [1, 1, 0, 0]

Before: [3, 1, 0, 1]
5 1 3 2
After:  [3, 1, 1, 1]

Before: [1, 2, 3, 3]
12 2 2 0
After:  [2, 2, 3, 3]

Before: [1, 3, 2, 1]
1 2 2 3
After:  [1, 3, 2, 2]

Before: [0, 2, 2, 3]
1 3 0 2
After:  [0, 2, 3, 3]

Before: [2, 0, 3, 1]
8 3 3 3
After:  [2, 0, 3, 1]

Before: [1, 3, 1, 2]
10 2 3 2
After:  [1, 3, 3, 2]

Before: [1, 1, 2, 1]
5 1 3 1
After:  [1, 1, 2, 1]

Before: [2, 0, 1, 3]
9 2 3 0
After:  [3, 0, 1, 3]

Before: [0, 3, 1, 0]
13 2 3 3
After:  [0, 3, 1, 3]

Before: [1, 2, 0, 1]
8 3 3 1
After:  [1, 1, 0, 1]

Before: [2, 1, 2, 3]
15 0 2 1
After:  [2, 4, 2, 3]

Before: [3, 3, 2, 3]
11 0 2 2
After:  [3, 3, 6, 3]

Before: [0, 0, 0, 2]
7 0 1 0
After:  [0, 0, 0, 2]

Before: [0, 1, 3, 1]
12 2 2 2
After:  [0, 1, 2, 1]

Before: [3, 2, 2, 3]
11 3 3 1
After:  [3, 9, 2, 3]

Before: [2, 3, 1, 0]
2 0 3 3
After:  [2, 3, 1, 3]

Before: [3, 3, 1, 2]
10 2 3 0
After:  [3, 3, 1, 2]

Before: [1, 0, 1, 0]
13 0 3 3
After:  [1, 0, 1, 3]

Before: [1, 1, 3, 3]
9 0 3 2
After:  [1, 1, 3, 3]

Before: [2, 2, 2, 2]
2 0 3 1
After:  [2, 3, 2, 2]

Before: [0, 1, 1, 3]
9 2 3 0
After:  [3, 1, 1, 3]

Before: [0, 1, 3, 1]
6 3 2 0
After:  [3, 1, 3, 1]

Before: [1, 2, 3, 3]
11 1 3 1
After:  [1, 6, 3, 3]

Before: [1, 2, 1, 3]
1 3 3 0
After:  [3, 2, 1, 3]

Before: [0, 3, 2, 0]
2 2 3 2
After:  [0, 3, 3, 0]

Before: [2, 1, 0, 1]
5 1 3 1
After:  [2, 1, 0, 1]

Before: [2, 0, 3, 0]
14 2 0 3
After:  [2, 0, 3, 2]

Before: [1, 1, 1, 3]
9 0 3 2
After:  [1, 1, 3, 3]

Before: [2, 1, 2, 1]
15 1 2 0
After:  [3, 1, 2, 1]

Before: [2, 1, 3, 1]
6 3 2 0
After:  [3, 1, 3, 1]

Before: [1, 1, 3, 2]
4 1 0 2
After:  [1, 1, 1, 2]

Before: [1, 1, 1, 0]
13 2 3 0
After:  [3, 1, 1, 0]

Before: [0, 2, 3, 0]
2 1 3 3
After:  [0, 2, 3, 3]

Before: [2, 1, 0, 3]
15 0 1 1
After:  [2, 3, 0, 3]

Before: [1, 1, 2, 0]
13 0 3 2
After:  [1, 1, 3, 0]

Before: [2, 2, 2, 2]
2 2 3 0
After:  [3, 2, 2, 2]

Before: [0, 0, 1, 0]
7 0 2 1
After:  [0, 0, 1, 0]

Before: [0, 0, 2, 3]
3 0 0 3
After:  [0, 0, 2, 0]

Before: [3, 1, 1, 3]
9 1 3 3
After:  [3, 1, 1, 3]

Before: [2, 1, 0, 3]
0 2 1 1
After:  [2, 1, 0, 3]

Before: [2, 0, 2, 2]
2 2 3 0
After:  [3, 0, 2, 2]

Before: [1, 2, 2, 3]
14 3 2 3
After:  [1, 2, 2, 2]

Before: [0, 0, 2, 3]
3 0 0 0
After:  [0, 0, 2, 3]

Before: [1, 0, 1, 0]
13 2 3 2
After:  [1, 0, 3, 0]

Before: [3, 3, 1, 1]
13 2 3 0
After:  [3, 3, 1, 1]

Before: [1, 1, 1, 3]
11 3 3 3
After:  [1, 1, 1, 9]

Before: [0, 3, 3, 3]
12 2 2 3
After:  [0, 3, 3, 2]

Before: [0, 2, 1, 3]
3 0 0 1
After:  [0, 0, 1, 3]

Before: [1, 0, 2, 3]
9 0 3 1
After:  [1, 3, 2, 3]

Before: [2, 3, 2, 1]
6 3 2 0
After:  [3, 3, 2, 1]

Before: [1, 3, 1, 3]
9 2 3 0
After:  [3, 3, 1, 3]

Before: [0, 1, 0, 0]
3 0 0 1
After:  [0, 0, 0, 0]

Before: [1, 0, 0, 0]
13 0 3 3
After:  [1, 0, 0, 3]

Before: [1, 3, 3, 2]
10 0 3 3
After:  [1, 3, 3, 3]

Before: [2, 0, 1, 2]
10 2 3 0
After:  [3, 0, 1, 2]

Before: [1, 1, 0, 1]
5 1 3 1
After:  [1, 1, 0, 1]

Before: [2, 2, 0, 0]
2 1 3 3
After:  [2, 2, 0, 3]

Before: [2, 2, 3, 2]
14 2 3 3
After:  [2, 2, 3, 2]

Before: [3, 3, 2, 3]
14 3 2 3
After:  [3, 3, 2, 2]

Before: [0, 1, 2, 2]
10 1 3 3
After:  [0, 1, 2, 3]

Before: [1, 0, 3, 2]
12 2 2 2
After:  [1, 0, 2, 2]

Before: [0, 2, 0, 2]
7 0 2 2
After:  [0, 2, 0, 2]

Before: [0, 0, 2, 0]
7 0 3 2
After:  [0, 0, 0, 0]

Before: [1, 1, 0, 0]
0 2 1 1
After:  [1, 1, 0, 0]

Before: [3, 1, 0, 1]
0 2 1 0
After:  [1, 1, 0, 1]

Before: [1, 1, 3, 1]
5 1 3 3
After:  [1, 1, 3, 1]

Before: [1, 1, 3, 3]
4 1 0 1
After:  [1, 1, 3, 3]

Before: [1, 1, 3, 0]
0 3 1 0
After:  [1, 1, 3, 0]

Before: [2, 1, 0, 3]
15 2 3 2
After:  [2, 1, 3, 3]

Before: [1, 0, 2, 2]
15 1 2 0
After:  [2, 0, 2, 2]

Before: [0, 3, 0, 1]
8 3 3 2
After:  [0, 3, 1, 1]

Before: [3, 1, 0, 1]
5 1 3 1
After:  [3, 1, 0, 1]

Before: [0, 2, 3, 2]
12 2 2 2
After:  [0, 2, 2, 2]

Before: [2, 1, 0, 3]
11 0 3 1
After:  [2, 6, 0, 3]

Before: [3, 1, 2, 0]
2 2 3 1
After:  [3, 3, 2, 0]

Before: [1, 2, 2, 1]
13 0 3 0
After:  [3, 2, 2, 1]

Before: [2, 3, 3, 2]
14 2 0 0
After:  [2, 3, 3, 2]

Before: [2, 1, 0, 0]
0 2 1 2
After:  [2, 1, 1, 0]

Before: [0, 0, 0, 1]
3 0 0 1
After:  [0, 0, 0, 1]

Before: [2, 2, 2, 3]
11 0 3 1
After:  [2, 6, 2, 3]

Before: [2, 2, 3, 0]
12 2 2 3
After:  [2, 2, 3, 2]

Before: [2, 3, 3, 1]
8 3 3 0
After:  [1, 3, 3, 1]

Before: [2, 1, 2, 2]
2 2 3 3
After:  [2, 1, 2, 3]

Before: [0, 0, 1, 1]
8 3 3 1
After:  [0, 1, 1, 1]

Before: [1, 1, 3, 1]
6 3 2 3
After:  [1, 1, 3, 3]

Before: [1, 1, 2, 2]
6 3 1 1
After:  [1, 3, 2, 2]

Before: [0, 0, 3, 2]
14 2 3 3
After:  [0, 0, 3, 2]

Before: [3, 1, 2, 2]
6 3 1 0
After:  [3, 1, 2, 2]

Before: [1, 0, 1, 2]
10 0 3 0
After:  [3, 0, 1, 2]

Before: [0, 2, 2, 0]
3 0 0 3
After:  [0, 2, 2, 0]

Before: [2, 1, 0, 0]
0 3 1 2
After:  [2, 1, 1, 0]

Before: [2, 1, 3, 2]
12 2 2 1
After:  [2, 2, 3, 2]

Before: [1, 1, 0, 2]
4 1 0 3
After:  [1, 1, 0, 1]

Before: [3, 1, 1, 1]
5 1 3 2
After:  [3, 1, 1, 1]

Before: [3, 0, 2, 0]
15 2 2 1
After:  [3, 4, 2, 0]

Before: [0, 2, 3, 1]
14 2 1 2
After:  [0, 2, 2, 1]

Before: [3, 2, 2, 3]
14 0 2 2
After:  [3, 2, 2, 3]

Before: [1, 1, 2, 1]
4 1 0 2
After:  [1, 1, 1, 1]

Before: [1, 3, 3, 1]
6 3 2 1
After:  [1, 3, 3, 1]

Before: [0, 0, 0, 0]
7 0 1 3
After:  [0, 0, 0, 0]

Before: [0, 3, 1, 3]
3 0 0 1
After:  [0, 0, 1, 3]

Before: [0, 1, 0, 0]
0 3 1 0
After:  [1, 1, 0, 0]

Before: [0, 0, 3, 1]
12 2 2 1
After:  [0, 2, 3, 1]

Before: [0, 0, 1, 1]
8 3 3 3
After:  [0, 0, 1, 1]

Before: [1, 3, 3, 1]
6 3 2 3
After:  [1, 3, 3, 3]

Before: [1, 1, 1, 3]
4 1 0 2
After:  [1, 1, 1, 3]

Before: [0, 3, 0, 2]
3 0 0 1
After:  [0, 0, 0, 2]

Before: [0, 1, 3, 1]
12 2 2 0
After:  [2, 1, 3, 1]

Before: [2, 1, 2, 1]
5 1 3 1
After:  [2, 1, 2, 1]

Before: [3, 0, 1, 2]
10 2 3 1
After:  [3, 3, 1, 2]

Before: [0, 3, 2, 3]
15 0 3 3
After:  [0, 3, 2, 3]

Before: [1, 1, 2, 2]
4 1 0 1
After:  [1, 1, 2, 2]

Before: [2, 1, 0, 2]
10 1 3 1
After:  [2, 3, 0, 2]

Before: [1, 1, 2, 2]
4 1 0 2
After:  [1, 1, 1, 2]

Before: [3, 0, 1, 3]
15 1 3 1
After:  [3, 3, 1, 3]

Before: [1, 3, 0, 1]
8 3 3 0
After:  [1, 3, 0, 1]

Before: [2, 2, 3, 2]
14 2 0 2
After:  [2, 2, 2, 2]

Before: [0, 3, 2, 1]
11 3 2 3
After:  [0, 3, 2, 2]

Before: [3, 2, 3, 2]
2 1 3 3
After:  [3, 2, 3, 3]

Before: [1, 1, 2, 3]
1 2 2 0
After:  [2, 1, 2, 3]

Before: [3, 1, 1, 0]
13 2 3 3
After:  [3, 1, 1, 3]

Before: [0, 3, 0, 2]
3 0 0 2
After:  [0, 3, 0, 2]

Before: [3, 2, 2, 3]
11 0 3 0
After:  [9, 2, 2, 3]

Before: [0, 1, 0, 3]
7 0 1 3
After:  [0, 1, 0, 0]

Before: [0, 1, 0, 2]
3 0 0 3
After:  [0, 1, 0, 0]

Before: [3, 1, 0, 3]
1 3 1 3
After:  [3, 1, 0, 3]

Before: [2, 1, 0, 0]
15 0 1 0
After:  [3, 1, 0, 0]

Before: [2, 1, 3, 0]
0 3 1 0
After:  [1, 1, 3, 0]

Before: [1, 2, 3, 1]
13 0 3 0
After:  [3, 2, 3, 1]

Before: [1, 0, 3, 1]
8 3 3 0
After:  [1, 0, 3, 1]

Before: [1, 0, 3, 1]
8 3 3 1
After:  [1, 1, 3, 1]

Before: [1, 2, 3, 1]
12 2 2 2
After:  [1, 2, 2, 1]

Before: [3, 0, 1, 1]
8 2 3 0
After:  [1, 0, 1, 1]

Before: [0, 1, 2, 2]
3 0 0 3
After:  [0, 1, 2, 0]

Before: [0, 1, 1, 3]
3 0 0 2
After:  [0, 1, 0, 3]

Before: [2, 1, 2, 1]
5 1 3 2
After:  [2, 1, 1, 1]

Before: [1, 0, 3, 3]
9 0 3 3
After:  [1, 0, 3, 3]

Before: [1, 0, 2, 3]
15 2 2 3
After:  [1, 0, 2, 4]

Before: [1, 2, 3, 2]
15 0 2 2
After:  [1, 2, 3, 2]

Before: [3, 1, 2, 3]
15 2 2 0
After:  [4, 1, 2, 3]

Before: [1, 0, 3, 2]
10 0 3 1
After:  [1, 3, 3, 2]

Before: [3, 1, 2, 3]
14 0 2 2
After:  [3, 1, 2, 3]

Before: [3, 0, 2, 2]
15 1 2 0
After:  [2, 0, 2, 2]

Before: [2, 3, 2, 3]
11 2 3 2
After:  [2, 3, 6, 3]

Before: [2, 1, 1, 0]
13 2 3 1
After:  [2, 3, 1, 0]

Before: [2, 0, 1, 2]
10 2 3 2
After:  [2, 0, 3, 2]

Before: [1, 2, 2, 1]
8 3 3 2
After:  [1, 2, 1, 1]

Before: [3, 2, 2, 1]
14 0 2 3
After:  [3, 2, 2, 2]

Before: [3, 1, 2, 2]
11 1 2 0
After:  [2, 1, 2, 2]

Before: [0, 3, 0, 3]
7 0 1 1
After:  [0, 0, 0, 3]

Before: [2, 1, 2, 0]
2 0 3 0
After:  [3, 1, 2, 0]

Before: [1, 1, 1, 2]
10 1 3 0
After:  [3, 1, 1, 2]

Before: [2, 1, 3, 3]
9 1 3 2
After:  [2, 1, 3, 3]

Before: [3, 0, 1, 3]
11 0 3 2
After:  [3, 0, 9, 3]

Before: [0, 1, 0, 1]
5 1 3 0
After:  [1, 1, 0, 1]

Before: [1, 1, 3, 1]
5 1 3 1
After:  [1, 1, 3, 1]

Before: [1, 1, 3, 1]
8 3 3 1
After:  [1, 1, 3, 1]

Before: [1, 1, 1, 2]
10 0 3 1
After:  [1, 3, 1, 2]

Before: [3, 2, 3, 1]
14 2 1 1
After:  [3, 2, 3, 1]

Before: [1, 2, 1, 1]
8 2 3 3
After:  [1, 2, 1, 1]

Before: [3, 3, 2, 1]
8 3 3 2
After:  [3, 3, 1, 1]

Before: [1, 1, 1, 2]
4 1 0 2
After:  [1, 1, 1, 2]

Before: [2, 3, 3, 1]
14 2 0 0
After:  [2, 3, 3, 1]

Before: [2, 0, 1, 3]
9 2 3 1
After:  [2, 3, 1, 3]

Before: [1, 1, 0, 1]
5 1 3 2
After:  [1, 1, 1, 1]

Before: [0, 1, 0, 2]
10 1 3 3
After:  [0, 1, 0, 3]

Before: [3, 1, 0, 1]
8 3 3 1
After:  [3, 1, 0, 1]

Before: [1, 1, 3, 2]
4 1 0 0
After:  [1, 1, 3, 2]

Before: [0, 3, 1, 0]
3 0 0 2
After:  [0, 3, 0, 0]

Before: [3, 1, 1, 0]
0 3 1 3
After:  [3, 1, 1, 1]

Before: [1, 0, 2, 2]
10 0 3 0
After:  [3, 0, 2, 2]

Before: [0, 1, 3, 1]
3 0 0 3
After:  [0, 1, 3, 0]

Before: [2, 3, 2, 0]
1 2 0 1
After:  [2, 2, 2, 0]

Before: [1, 1, 3, 0]
0 3 1 1
After:  [1, 1, 3, 0]

Before: [2, 0, 1, 3]
15 1 3 0
After:  [3, 0, 1, 3]

Before: [2, 0, 3, 1]
8 3 3 2
After:  [2, 0, 1, 1]

Before: [0, 2, 3, 2]
7 0 2 3
After:  [0, 2, 3, 0]

Before: [1, 3, 3, 3]
9 0 3 1
After:  [1, 3, 3, 3]

Before: [3, 1, 2, 3]
1 3 3 1
After:  [3, 3, 2, 3]

Before: [0, 0, 3, 0]
3 0 0 3
After:  [0, 0, 3, 0]

Before: [2, 3, 2, 3]
11 1 2 3
After:  [2, 3, 2, 6]

Before: [2, 1, 0, 1]
8 3 3 1
After:  [2, 1, 0, 1]

Before: [2, 1, 1, 0]
0 3 1 2
After:  [2, 1, 1, 0]

Before: [0, 0, 3, 2]
12 2 2 2
After:  [0, 0, 2, 2]

Before: [3, 2, 3, 3]
11 1 3 0
After:  [6, 2, 3, 3]

Before: [3, 1, 0, 0]
0 2 1 3
After:  [3, 1, 0, 1]

Before: [1, 3, 2, 3]
9 0 3 0
After:  [3, 3, 2, 3]

Before: [0, 0, 0, 0]
3 0 0 3
After:  [0, 0, 0, 0]

Before: [0, 1, 1, 2]
3 0 0 1
After:  [0, 0, 1, 2]

Before: [1, 2, 2, 2]
10 0 3 0
After:  [3, 2, 2, 2]

Before: [2, 1, 2, 0]
0 3 1 2
After:  [2, 1, 1, 0]

Before: [2, 3, 0, 3]
11 1 3 0
After:  [9, 3, 0, 3]

Before: [1, 2, 3, 1]
13 0 3 1
After:  [1, 3, 3, 1]

Before: [0, 2, 0, 3]
1 3 3 0
After:  [3, 2, 0, 3]

Before: [1, 1, 0, 3]
1 3 1 2
After:  [1, 1, 3, 3]

Before: [3, 1, 3, 0]
13 1 3 3
After:  [3, 1, 3, 3]

Before: [3, 2, 2, 2]
2 2 3 0
After:  [3, 2, 2, 2]

Before: [0, 0, 3, 1]
12 2 2 2
After:  [0, 0, 2, 1]

Before: [0, 1, 3, 1]
5 1 3 2
After:  [0, 1, 1, 1]

Before: [0, 1, 1, 1]
7 0 1 1
After:  [0, 0, 1, 1]

Before: [3, 1, 3, 0]
0 3 1 0
After:  [1, 1, 3, 0]

Before: [0, 2, 2, 3]
11 1 3 0
After:  [6, 2, 2, 3]

Before: [0, 3, 0, 3]
11 1 3 0
After:  [9, 3, 0, 3]

Before: [0, 1, 3, 1]
7 0 1 2
After:  [0, 1, 0, 1]

Before: [2, 1, 2, 3]
15 2 2 1
After:  [2, 4, 2, 3]

Before: [2, 1, 2, 3]
9 1 3 3
After:  [2, 1, 2, 3]

Before: [0, 0, 3, 0]
12 2 2 1
After:  [0, 2, 3, 0]

Before: [1, 2, 3, 3]
14 2 1 3
After:  [1, 2, 3, 2]

Before: [0, 1, 2, 0]
0 3 1 1
After:  [0, 1, 2, 0]

Before: [2, 3, 1, 2]
10 2 3 0
After:  [3, 3, 1, 2]

Before: [3, 1, 3, 1]
5 1 3 3
After:  [3, 1, 3, 1]

Before: [0, 1, 3, 3]
1 3 1 1
After:  [0, 3, 3, 3]

Before: [0, 2, 1, 3]
7 0 2 2
After:  [0, 2, 0, 3]

Before: [1, 2, 3, 3]
11 1 3 0
After:  [6, 2, 3, 3]

Before: [2, 1, 1, 0]
0 3 1 1
After:  [2, 1, 1, 0]

Before: [2, 1, 2, 2]
2 2 3 0
After:  [3, 1, 2, 2]

Before: [1, 2, 3, 3]
9 0 3 2
After:  [1, 2, 3, 3]

Before: [1, 2, 2, 0]
2 2 3 1
After:  [1, 3, 2, 0]

Before: [3, 2, 2, 0]
15 2 2 3
After:  [3, 2, 2, 4]

Before: [3, 1, 3, 1]
6 3 2 2
After:  [3, 1, 3, 1]

Before: [0, 3, 2, 2]
15 3 2 0
After:  [4, 3, 2, 2]

Before: [1, 1, 3, 2]
12 2 2 0
After:  [2, 1, 3, 2]

Before: [3, 3, 1, 1]
8 2 3 0
After:  [1, 3, 1, 1]

Before: [0, 3, 0, 2]
3 0 0 3
After:  [0, 3, 0, 0]

Before: [0, 1, 2, 1]
15 1 2 1
After:  [0, 3, 2, 1]

Before: [3, 3, 2, 1]
8 3 3 0
After:  [1, 3, 2, 1]

Before: [0, 0, 2, 1]
8 3 3 2
After:  [0, 0, 1, 1]

Before: [1, 0, 3, 1]
13 0 3 2
After:  [1, 0, 3, 1]

Before: [3, 3, 3, 3]
12 2 2 1
After:  [3, 2, 3, 3]

Before: [0, 1, 1, 0]
0 3 1 3
After:  [0, 1, 1, 1]

Before: [2, 1, 0, 1]
5 1 3 2
After:  [2, 1, 1, 1]

Before: [1, 0, 0, 1]
8 3 3 0
After:  [1, 0, 0, 1]

Before: [0, 3, 0, 2]
7 0 2 3
After:  [0, 3, 0, 0]

Before: [0, 3, 3, 3]
3 0 0 0
After:  [0, 3, 3, 3]

Before: [3, 2, 3, 1]
6 3 2 2
After:  [3, 2, 3, 1]

Before: [1, 1, 2, 0]
0 3 1 1
After:  [1, 1, 2, 0]

Before: [1, 0, 1, 1]
8 3 3 1
After:  [1, 1, 1, 1]

Before: [3, 1, 3, 2]
10 1 3 2
After:  [3, 1, 3, 2]

Before: [2, 1, 0, 0]
0 2 1 3
After:  [2, 1, 0, 1]

Before: [0, 0, 0, 2]
7 0 3 1
After:  [0, 0, 0, 2]

Before: [1, 1, 2, 2]
15 1 2 1
After:  [1, 3, 2, 2]

Before: [1, 0, 2, 3]
14 3 2 1
After:  [1, 2, 2, 3]

Before: [1, 1, 3, 3]
4 1 0 2
After:  [1, 1, 1, 3]

Before: [0, 1, 0, 2]
0 2 1 2
After:  [0, 1, 1, 2]

Before: [1, 3, 3, 1]
8 3 3 2
After:  [1, 3, 1, 1]

Before: [2, 1, 3, 3]
9 1 3 1
After:  [2, 3, 3, 3]

Before: [0, 3, 1, 2]
3 0 0 3
After:  [0, 3, 1, 0]

Before: [0, 1, 3, 3]
3 0 0 0
After:  [0, 1, 3, 3]

Before: [2, 1, 1, 1]
5 1 3 0
After:  [1, 1, 1, 1]

Before: [3, 3, 3, 2]
14 2 3 2
After:  [3, 3, 2, 2]

Before: [3, 3, 3, 3]
12 2 2 2
After:  [3, 3, 2, 3]

Before: [0, 2, 2, 2]
1 2 2 2
After:  [0, 2, 2, 2]

Before: [0, 2, 1, 0]
2 1 3 0
After:  [3, 2, 1, 0]

Before: [0, 0, 3, 1]
6 3 2 0
After:  [3, 0, 3, 1]

Before: [1, 1, 2, 2]
1 2 2 3
After:  [1, 1, 2, 2]

Before: [3, 1, 0, 0]
0 2 1 1
After:  [3, 1, 0, 0]

Before: [1, 1, 0, 3]
9 0 3 0
After:  [3, 1, 0, 3]

Before: [3, 2, 2, 2]
2 1 3 3
After:  [3, 2, 2, 3]

Before: [2, 3, 2, 2]
2 2 3 1
After:  [2, 3, 2, 2]

Before: [1, 1, 1, 1]
4 1 0 3
After:  [1, 1, 1, 1]

Before: [1, 2, 1, 3]
9 0 3 3
After:  [1, 2, 1, 3]

Before: [1, 2, 0, 1]
13 0 3 3
After:  [1, 2, 0, 3]

Before: [0, 2, 2, 3]
3 0 0 3
After:  [0, 2, 2, 0]

Before: [0, 2, 3, 2]
14 2 1 2
After:  [0, 2, 2, 2]

Before: [1, 1, 3, 0]
4 1 0 1
After:  [1, 1, 3, 0]

Before: [1, 1, 0, 2]
4 1 0 1
After:  [1, 1, 0, 2]

Before: [1, 1, 0, 3]
9 1 3 1
After:  [1, 3, 0, 3]

Before: [0, 3, 0, 3]
3 0 0 3
After:  [0, 3, 0, 0]

Before: [1, 0, 3, 0]
13 0 3 1
After:  [1, 3, 3, 0]

Before: [2, 0, 2, 0]
15 1 2 3
After:  [2, 0, 2, 2]

Before: [1, 1, 3, 2]
6 3 1 2
After:  [1, 1, 3, 2]

Before: [1, 0, 2, 3]
9 0 3 2
After:  [1, 0, 3, 3]

Before: [0, 2, 3, 0]
14 2 1 0
After:  [2, 2, 3, 0]

Before: [0, 1, 2, 3]
15 2 1 1
After:  [0, 3, 2, 3]

Before: [0, 3, 3, 1]
12 2 2 3
After:  [0, 3, 3, 2]

Before: [0, 1, 0, 0]
7 0 2 1
After:  [0, 0, 0, 0]

Before: [0, 2, 1, 1]
7 0 2 2
After:  [0, 2, 0, 1]

Before: [1, 3, 1, 0]
13 0 3 1
After:  [1, 3, 1, 0]

Before: [1, 1, 0, 3]
9 0 3 1
After:  [1, 3, 0, 3]

Before: [2, 1, 1, 3]
1 3 1 0
After:  [3, 1, 1, 3]

Before: [0, 1, 1, 3]
7 0 1 1
After:  [0, 0, 1, 3]

Before: [0, 1, 0, 1]
5 1 3 1
After:  [0, 1, 0, 1]

Before: [0, 3, 2, 0]
3 0 0 0
After:  [0, 3, 2, 0]

Before: [3, 1, 3, 2]
10 1 3 0
After:  [3, 1, 3, 2]

Before: [3, 1, 2, 2]
6 3 1 2
After:  [3, 1, 3, 2]

Before: [1, 1, 2, 1]
5 1 3 0
After:  [1, 1, 2, 1]

Before: [0, 1, 0, 0]
3 0 0 0
After:  [0, 1, 0, 0]

Before: [2, 3, 0, 3]
11 0 3 2
After:  [2, 3, 6, 3]

Before: [0, 1, 2, 0]
7 0 2 1
After:  [0, 0, 2, 0]

Before: [3, 1, 2, 1]
5 1 3 3
After:  [3, 1, 2, 1]

Before: [1, 1, 0, 3]
0 2 1 2
After:  [1, 1, 1, 3]

Before: [3, 1, 1, 1]
8 3 3 0
After:  [1, 1, 1, 1]

Before: [2, 1, 3, 1]
8 3 3 1
After:  [2, 1, 3, 1]

Before: [1, 0, 3, 2]
10 0 3 2
After:  [1, 0, 3, 2]

Before: [1, 1, 1, 2]
4 1 0 3
After:  [1, 1, 1, 1]

Before: [3, 3, 3, 2]
12 2 2 3
After:  [3, 3, 3, 2]

Before: [2, 2, 3, 1]
6 3 2 1
After:  [2, 3, 3, 1]

Before: [2, 3, 2, 1]
11 1 2 1
After:  [2, 6, 2, 1]

Before: [1, 1, 3, 0]
0 3 1 3
After:  [1, 1, 3, 1]

Before: [1, 3, 1, 1]
8 3 3 1
After:  [1, 1, 1, 1]

Before: [2, 3, 1, 3]
9 2 3 2
After:  [2, 3, 3, 3]

Before: [3, 0, 2, 1]
6 3 2 0
After:  [3, 0, 2, 1]

Before: [0, 1, 3, 0]
3 0 0 3
After:  [0, 1, 3, 0]

Before: [1, 0, 2, 1]
6 3 2 2
After:  [1, 0, 3, 1]

Before: [0, 1, 0, 1]
7 0 2 2
After:  [0, 1, 0, 1]

Before: [0, 1, 3, 1]
13 1 3 1
After:  [0, 3, 3, 1]

Before: [0, 1, 0, 1]
5 1 3 3
After:  [0, 1, 0, 1]

Before: [1, 1, 1, 3]
9 1 3 2
After:  [1, 1, 3, 3]

Before: [0, 0, 0, 0]
3 0 0 2
After:  [0, 0, 0, 0]

Before: [0, 2, 0, 1]
3 0 0 0
After:  [0, 2, 0, 1]

Before: [3, 1, 0, 3]
0 2 1 0
After:  [1, 1, 0, 3]

Before: [2, 0, 2, 0]
2 0 3 1
After:  [2, 3, 2, 0]

Before: [2, 1, 1, 3]
9 2 3 3
After:  [2, 1, 1, 3]

Before: [0, 1, 0, 3]
15 0 3 3
After:  [0, 1, 0, 3]

Before: [2, 0, 2, 1]
15 1 2 3
After:  [2, 0, 2, 2]

Before: [2, 1, 1, 3]
9 1 3 3
After:  [2, 1, 1, 3]

Before: [1, 2, 1, 0]
13 2 3 3
After:  [1, 2, 1, 3]

Before: [0, 1, 0, 3]
9 1 3 1
After:  [0, 3, 0, 3]

Before: [0, 3, 2, 1]
3 0 0 2
After:  [0, 3, 0, 1]

Before: [1, 2, 3, 3]
11 1 3 3
After:  [1, 2, 3, 6]

Before: [1, 1, 0, 3]
4 1 0 3
After:  [1, 1, 0, 1]

Before: [1, 0, 0, 3]
9 0 3 3
After:  [1, 0, 0, 3]

Before: [1, 3, 1, 1]
13 0 3 2
After:  [1, 3, 3, 1]

Before: [1, 1, 0, 1]
0 2 1 1
After:  [1, 1, 0, 1]

Before: [1, 1, 0, 2]
4 1 0 2
After:  [1, 1, 1, 2]

Before: [0, 1, 3, 2]
15 1 2 1
After:  [0, 3, 3, 2]

Before: [1, 1, 3, 2]
12 2 2 2
After:  [1, 1, 2, 2]

Before: [3, 1, 3, 2]
6 3 1 1
After:  [3, 3, 3, 2]

Before: [0, 1, 0, 3]
9 1 3 3
After:  [0, 1, 0, 3]

Before: [1, 0, 1, 2]
10 2 3 1
After:  [1, 3, 1, 2]

Before: [2, 1, 2, 2]
10 1 3 1
After:  [2, 3, 2, 2]

Before: [3, 1, 2, 1]
5 1 3 2
After:  [3, 1, 1, 1]

Before: [3, 1, 0, 2]
0 2 1 0
After:  [1, 1, 0, 2]

Before: [2, 1, 3, 1]
12 2 2 3
After:  [2, 1, 3, 2]

Before: [1, 0, 1, 1]
13 2 3 2
After:  [1, 0, 3, 1]

Before: [2, 1, 1, 3]
9 2 3 0
After:  [3, 1, 1, 3]

Before: [1, 1, 2, 0]
0 3 1 3
After:  [1, 1, 2, 1]

Before: [0, 2, 2, 0]
2 2 3 3
After:  [0, 2, 2, 3]

Before: [0, 2, 2, 0]
7 0 1 2
After:  [0, 2, 0, 0]

Before: [1, 2, 3, 3]
11 3 3 0
After:  [9, 2, 3, 3]

Before: [0, 2, 3, 1]
8 3 3 0
After:  [1, 2, 3, 1]

Before: [3, 2, 2, 0]
2 1 3 2
After:  [3, 2, 3, 0]

Before: [3, 1, 3, 1]
13 1 3 0
After:  [3, 1, 3, 1]

Before: [1, 2, 1, 1]
13 2 3 2
After:  [1, 2, 3, 1]

Before: [3, 1, 0, 1]
5 1 3 0
After:  [1, 1, 0, 1]

Before: [1, 0, 1, 3]
9 2 3 2
After:  [1, 0, 3, 3]

Before: [3, 1, 1, 2]
10 2 3 1
After:  [3, 3, 1, 2]

Before: [3, 1, 3, 1]
5 1 3 1
After:  [3, 1, 3, 1]

Before: [2, 1, 1, 0]
13 1 3 3
After:  [2, 1, 1, 3]

Before: [1, 1, 0, 2]
0 2 1 1
After:  [1, 1, 0, 2]

Before: [1, 2, 3, 2]
10 0 3 1
After:  [1, 3, 3, 2]

Before: [1, 0, 1, 3]
1 3 0 0
After:  [3, 0, 1, 3]

Before: [0, 2, 0, 3]
3 0 0 0
After:  [0, 2, 0, 3]

Before: [2, 1, 3, 2]
10 1 3 0
After:  [3, 1, 3, 2]

Before: [1, 1, 2, 3]
1 3 0 0
After:  [3, 1, 2, 3]

Before: [0, 0, 1, 1]
13 2 3 0
After:  [3, 0, 1, 1]

Before: [2, 2, 1, 2]
2 1 3 1
After:  [2, 3, 1, 2]

Before: [0, 3, 3, 2]
12 2 2 3
After:  [0, 3, 3, 2]

Before: [0, 0, 2, 3]
14 3 2 2
After:  [0, 0, 2, 3]

Before: [2, 0, 1, 0]
2 0 3 0
After:  [3, 0, 1, 0]

Before: [1, 1, 1, 2]
10 0 3 3
After:  [1, 1, 1, 3]

Before: [2, 3, 2, 1]
1 2 2 1
After:  [2, 2, 2, 1]

Before: [0, 3, 0, 3]
1 3 1 3
After:  [0, 3, 0, 3]

Before: [1, 2, 3, 3]
14 2 1 0
After:  [2, 2, 3, 3]

Before: [3, 1, 0, 1]
0 2 1 3
After:  [3, 1, 0, 1]

Before: [1, 0, 1, 2]
10 0 3 1
After:  [1, 3, 1, 2]

Before: [3, 3, 2, 3]
1 3 0 2
After:  [3, 3, 3, 3]

Before: [3, 0, 3, 3]
11 3 3 3
After:  [3, 0, 3, 9]

Before: [2, 0, 2, 3]
14 3 2 0
After:  [2, 0, 2, 3]

Before: [3, 3, 2, 3]
11 3 3 2
After:  [3, 3, 9, 3]

Before: [2, 0, 3, 2]
12 2 2 2
After:  [2, 0, 2, 2]

Before: [0, 1, 1, 3]
9 2 3 2
After:  [0, 1, 3, 3]

Before: [1, 2, 1, 1]
8 2 3 2
After:  [1, 2, 1, 1]

Before: [1, 3, 3, 0]
12 2 2 0
After:  [2, 3, 3, 0]

Before: [2, 2, 3, 1]
14 2 1 0
After:  [2, 2, 3, 1]

Before: [1, 3, 2, 0]
2 2 3 3
After:  [1, 3, 2, 3]

Before: [1, 2, 0, 1]
13 0 3 1
After:  [1, 3, 0, 1]

Before: [1, 1, 3, 3]
4 1 0 0
After:  [1, 1, 3, 3]

Before: [1, 1, 3, 2]
15 0 2 2
After:  [1, 1, 3, 2]

Before: [2, 1, 2, 1]
5 1 3 3
After:  [2, 1, 2, 1]

Before: [3, 0, 3, 3]
15 1 3 1
After:  [3, 3, 3, 3]

Before: [3, 0, 3, 3]
11 0 3 1
After:  [3, 9, 3, 3]

Before: [3, 3, 2, 3]
14 0 2 0
After:  [2, 3, 2, 3]

Before: [1, 1, 3, 1]
6 3 2 0
After:  [3, 1, 3, 1]

Before: [2, 0, 2, 2]
2 2 3 3
After:  [2, 0, 2, 3]

Before: [0, 2, 0, 3]
15 2 3 3
After:  [0, 2, 0, 3]

Before: [1, 3, 2, 0]
11 1 2 3
After:  [1, 3, 2, 6]

Before: [1, 1, 0, 0]
0 2 1 2
After:  [1, 1, 1, 0]

Before: [1, 2, 0, 1]
8 3 3 2
After:  [1, 2, 1, 1]

Before: [0, 3, 2, 1]
1 2 2 1
After:  [0, 2, 2, 1]

Before: [2, 0, 0, 3]
1 3 3 0
After:  [3, 0, 0, 3]

Before: [3, 2, 3, 1]
12 2 2 0
After:  [2, 2, 3, 1]

Before: [0, 1, 0, 2]
6 3 1 3
After:  [0, 1, 0, 3]

Before: [3, 2, 2, 0]
14 0 2 3
After:  [3, 2, 2, 2]

Before: [2, 1, 3, 3]
11 2 3 3
After:  [2, 1, 3, 9]

Before: [2, 2, 1, 3]
9 2 3 2
After:  [2, 2, 3, 3]

Before: [3, 0, 0, 1]
8 3 3 2
After:  [3, 0, 1, 1]

Before: [1, 2, 1, 0]
2 1 3 3
After:  [1, 2, 1, 3]

Before: [1, 3, 3, 3]
12 2 2 3
After:  [1, 3, 3, 2]

Before: [0, 1, 1, 1]
5 1 3 2
After:  [0, 1, 1, 1]

Before: [1, 0, 0, 1]
8 3 3 3
After:  [1, 0, 0, 1]

Before: [1, 1, 2, 1]
5 1 3 2
After:  [1, 1, 1, 1]

Before: [2, 2, 2, 3]
15 2 2 0
After:  [4, 2, 2, 3]

Before: [2, 2, 2, 1]
8 3 3 2
After:  [2, 2, 1, 1]

Before: [3, 0, 2, 3]
11 0 3 0
After:  [9, 0, 2, 3]

Before: [3, 0, 3, 1]
6 3 2 1
After:  [3, 3, 3, 1]

Before: [3, 0, 3, 3]
1 3 1 1
After:  [3, 3, 3, 3]

Before: [0, 1, 0, 1]
0 2 1 1
After:  [0, 1, 0, 1]

Before: [2, 1, 0, 1]
5 1 3 3
After:  [2, 1, 0, 1]

Before: [1, 0, 1, 3]
1 3 0 2
After:  [1, 0, 3, 3]

Before: [2, 0, 2, 1]
15 1 2 2
After:  [2, 0, 2, 1]

Before: [0, 0, 2, 2]
7 0 1 0
After:  [0, 0, 2, 2]

Before: [2, 1, 1, 2]
10 1 3 2
After:  [2, 1, 3, 2]

Before: [2, 3, 2, 3]
11 3 3 2
After:  [2, 3, 9, 3]

Before: [0, 3, 3, 2]
7 0 3 0
After:  [0, 3, 3, 2]

Before: [3, 1, 3, 0]
0 3 1 2
After:  [3, 1, 1, 0]

Before: [1, 0, 1, 3]
9 0 3 0
After:  [3, 0, 1, 3]

Before: [2, 1, 2, 2]
1 2 0 1
After:  [2, 2, 2, 2]

Before: [3, 1, 0, 3]
0 2 1 1
After:  [3, 1, 0, 3]

Before: [2, 1, 3, 2]
6 3 1 2
After:  [2, 1, 3, 2]

Before: [0, 0, 1, 3]
9 2 3 1
After:  [0, 3, 1, 3]

Before: [2, 2, 2, 2]
2 1 3 0
After:  [3, 2, 2, 2]

Before: [3, 1, 1, 1]
5 1 3 3
After:  [3, 1, 1, 1]

Before: [1, 1, 2, 1]
11 0 2 3
After:  [1, 1, 2, 2]

Before: [1, 0, 2, 3]
15 0 2 2
After:  [1, 0, 3, 3]

Before: [1, 3, 3, 1]
13 0 3 3
After:  [1, 3, 3, 3]

Before: [2, 1, 3, 2]
6 3 1 0
After:  [3, 1, 3, 2]

Before: [0, 1, 1, 2]
6 3 1 2
After:  [0, 1, 3, 2]

Before: [3, 1, 2, 2]
11 0 2 2
After:  [3, 1, 6, 2]

Before: [2, 3, 2, 0]
2 2 3 1
After:  [2, 3, 2, 0]

Before: [3, 1, 1, 0]
13 1 3 3
After:  [3, 1, 1, 3]

Before: [2, 0, 2, 3]
11 3 3 1
After:  [2, 9, 2, 3]

Before: [1, 3, 3, 1]
12 2 2 1
After:  [1, 2, 3, 1]

Before: [0, 0, 0, 1]
3 0 0 3
After:  [0, 0, 0, 0]

Before: [1, 1, 0, 1]
5 1 3 0
After:  [1, 1, 0, 1]

Before: [1, 1, 0, 3]
4 1 0 0
After:  [1, 1, 0, 3]

Before: [2, 3, 2, 0]
15 0 2 2
After:  [2, 3, 4, 0]

Before: [2, 1, 0, 1]
5 1 3 0
After:  [1, 1, 0, 1]

Before: [1, 2, 3, 3]
1 3 0 0
After:  [3, 2, 3, 3]

Before: [3, 1, 1, 1]
5 1 3 0
After:  [1, 1, 1, 1]

Before: [1, 2, 1, 3]
11 1 3 2
After:  [1, 2, 6, 3]

Before: [1, 1, 0, 2]
10 0 3 2
After:  [1, 1, 3, 2]

Before: [2, 2, 0, 3]
11 1 3 3
After:  [2, 2, 0, 6]

Before: [2, 2, 0, 2]
2 0 3 2
After:  [2, 2, 3, 2]

Before: [1, 1, 2, 1]
8 3 3 2
After:  [1, 1, 1, 1]

Before: [1, 0, 1, 3]
9 2 3 1
After:  [1, 3, 1, 3]

Before: [2, 0, 2, 3]
11 0 3 2
After:  [2, 0, 6, 3]

Before: [1, 1, 2, 0]
13 1 3 1
After:  [1, 3, 2, 0]

Before: [1, 1, 3, 0]
4 1 0 2
After:  [1, 1, 1, 0]

Before: [3, 2, 3, 1]
12 2 2 1
After:  [3, 2, 3, 1]

Before: [0, 2, 3, 3]
7 0 2 1
After:  [0, 0, 3, 3]

Before: [3, 1, 2, 1]
15 2 1 3
After:  [3, 1, 2, 3]

Before: [1, 3, 1, 1]
8 3 3 3
After:  [1, 3, 1, 1]

Before: [1, 1, 0, 1]
4 1 0 3
After:  [1, 1, 0, 1]

Before: [0, 1, 0, 0]
15 0 1 0
After:  [1, 1, 0, 0]

Before: [3, 0, 2, 2]
1 2 2 0
After:  [2, 0, 2, 2]

Before: [0, 0, 2, 0]
3 0 0 0
After:  [0, 0, 2, 0]

Before: [3, 0, 2, 1]
6 3 2 2
After:  [3, 0, 3, 1]

Before: [1, 3, 2, 3]
1 3 3 3
After:  [1, 3, 2, 3]

Before: [1, 1, 2, 1]
4 1 0 3
After:  [1, 1, 2, 1]

Before: [0, 2, 3, 3]
11 2 3 2
After:  [0, 2, 9, 3]

Before: [0, 2, 3, 2]
3 0 0 2
After:  [0, 2, 0, 2]

Before: [1, 0, 2, 1]
11 0 2 3
After:  [1, 0, 2, 2]

Before: [3, 2, 1, 0]
13 2 3 2
After:  [3, 2, 3, 0]

Before: [3, 2, 1, 3]
11 0 3 3
After:  [3, 2, 1, 9]

Before: [3, 0, 2, 3]
11 3 2 2
After:  [3, 0, 6, 3]

Before: [0, 1, 3, 3]
9 1 3 0
After:  [3, 1, 3, 3]

Before: [1, 0, 3, 3]
9 0 3 2
After:  [1, 0, 3, 3]

Before: [2, 1, 2, 0]
0 3 1 3
After:  [2, 1, 2, 1]

Before: [0, 0, 3, 1]
8 3 3 3
After:  [0, 0, 3, 1]

Before: [1, 1, 2, 1]
8 3 3 3
After:  [1, 1, 2, 1]

Before: [1, 2, 2, 3]
11 0 2 3
After:  [1, 2, 2, 2]

Before: [3, 3, 3, 3]
1 3 1 1
After:  [3, 3, 3, 3]

Before: [0, 1, 2, 3]
9 1 3 0
After:  [3, 1, 2, 3]

Before: [1, 1, 0, 3]
1 3 3 0
After:  [3, 1, 0, 3]

Before: [2, 2, 3, 1]
6 3 2 3
After:  [2, 2, 3, 3]

Before: [1, 3, 3, 1]
8 3 3 0
After:  [1, 3, 3, 1]

Before: [0, 2, 3, 1]
7 0 3 0
After:  [0, 2, 3, 1]

Before: [0, 1, 2, 1]
5 1 3 3
After:  [0, 1, 2, 1]

Before: [3, 1, 1, 2]
6 3 1 0
After:  [3, 1, 1, 2]

Before: [1, 1, 2, 1]
5 1 3 3
After:  [1, 1, 2, 1]

Before: [0, 2, 0, 3]
7 0 1 3
After:  [0, 2, 0, 0]

Before: [3, 1, 1, 0]
0 3 1 2
After:  [3, 1, 1, 0]

Before: [3, 1, 0, 1]
5 1 3 3
After:  [3, 1, 0, 1]

Before: [1, 1, 1, 1]
8 2 3 3
After:  [1, 1, 1, 1]

Before: [0, 3, 2, 1]
6 3 2 2
After:  [0, 3, 3, 1]

Before: [0, 2, 1, 3]
3 0 0 3
After:  [0, 2, 1, 0]

Before: [3, 1, 3, 1]
6 3 2 1
After:  [3, 3, 3, 1]

Before: [3, 2, 2, 3]
1 3 0 3
After:  [3, 2, 2, 3]

Before: [3, 2, 1, 1]
8 3 3 2
After:  [3, 2, 1, 1]

Before: [3, 1, 1, 3]
1 3 1 2
After:  [3, 1, 3, 3]

Before: [2, 3, 3, 1]
12 2 2 1
After:  [2, 2, 3, 1]

Before: [3, 1, 3, 0]
0 3 1 1
After:  [3, 1, 3, 0]

Before: [2, 1, 2, 2]
10 1 3 0
After:  [3, 1, 2, 2]

Before: [1, 1, 3, 2]
4 1 0 3
After:  [1, 1, 3, 1]

Before: [0, 1, 0, 0]
7 0 1 3
After:  [0, 1, 0, 0]

Before: [0, 1, 1, 0]
0 3 1 1
After:  [0, 1, 1, 0]

Before: [0, 1, 0, 1]
5 1 3 2
After:  [0, 1, 1, 1]

Before: [2, 1, 1, 1]
5 1 3 1
After:  [2, 1, 1, 1]

Before: [3, 0, 2, 3]
11 0 3 3
After:  [3, 0, 2, 9]

Before: [3, 1, 0, 2]
10 1 3 2
After:  [3, 1, 3, 2]

Before: [1, 2, 2, 3]
9 0 3 2
After:  [1, 2, 3, 3]

Before: [0, 3, 2, 1]
14 1 2 3
After:  [0, 3, 2, 2]

Before: [1, 3, 0, 3]
11 3 3 2
After:  [1, 3, 9, 3]

Before: [0, 0, 2, 1]
6 3 2 2
After:  [0, 0, 3, 1]

Before: [1, 1, 2, 1]
4 1 0 1
After:  [1, 1, 2, 1]

Before: [1, 3, 2, 3]
11 1 2 0
After:  [6, 3, 2, 3]

Before: [2, 2, 1, 0]
2 0 3 3
After:  [2, 2, 1, 3]

Before: [0, 1, 1, 0]
0 3 1 0
After:  [1, 1, 1, 0]

Before: [0, 1, 2, 2]
6 3 1 0
After:  [3, 1, 2, 2]

Before: [1, 3, 3, 2]
15 0 2 0
After:  [3, 3, 3, 2]

Before: [3, 2, 3, 2]
14 2 1 2
After:  [3, 2, 2, 2]

Before: [1, 1, 0, 0]
4 1 0 1
After:  [1, 1, 0, 0]

Before: [0, 1, 3, 0]
0 3 1 0
After:  [1, 1, 3, 0]

Before: [3, 0, 3, 2]
12 2 2 2
After:  [3, 0, 2, 2]

Before: [0, 0, 2, 1]
15 2 2 0
After:  [4, 0, 2, 1]

Before: [3, 3, 0, 1]
8 3 3 0
After:  [1, 3, 0, 1]

Before: [2, 2, 1, 3]
9 2 3 3
After:  [2, 2, 1, 3]

Before: [0, 3, 1, 0]
7 0 1 2
After:  [0, 3, 0, 0]

Before: [1, 3, 2, 2]
14 1 2 2
After:  [1, 3, 2, 2]

Before: [3, 3, 2, 0]
1 2 2 0
After:  [2, 3, 2, 0]

Before: [1, 1, 3, 2]
4 1 0 1
After:  [1, 1, 3, 2]

Before: [1, 0, 2, 2]
1 2 2 0
After:  [2, 0, 2, 2]

Before: [1, 2, 0, 0]
2 1 3 3
After:  [1, 2, 0, 3]

Before: [2, 2, 2, 2]
1 2 0 0
After:  [2, 2, 2, 2]

Before: [0, 3, 2, 2]
1 2 2 2
After:  [0, 3, 2, 2]

Before: [0, 2, 3, 1]
8 3 3 2
After:  [0, 2, 1, 1]

Before: [2, 0, 3, 2]
14 2 0 1
After:  [2, 2, 3, 2]

Before: [1, 1, 1, 3]
4 1 0 1
After:  [1, 1, 1, 3]

Before: [1, 1, 3, 2]
6 3 1 1
After:  [1, 3, 3, 2]

Before: [0, 0, 3, 3]
1 3 1 1
After:  [0, 3, 3, 3]

Before: [3, 1, 3, 2]
6 3 1 0
After:  [3, 1, 3, 2]

Before: [2, 3, 3, 2]
14 2 0 3
After:  [2, 3, 3, 2]

Before: [2, 0, 1, 2]
10 2 3 3
After:  [2, 0, 1, 3]

Before: [2, 1, 2, 3]
1 3 3 0
After:  [3, 1, 2, 3]

Before: [0, 1, 1, 2]
10 2 3 0
After:  [3, 1, 1, 2]

Before: [3, 3, 2, 2]
2 2 3 1
After:  [3, 3, 2, 2]

Before: [1, 1, 0, 2]
4 1 0 0
After:  [1, 1, 0, 2]

Before: [3, 2, 2, 1]
14 0 2 0
After:  [2, 2, 2, 1]

Before: [0, 2, 3, 1]
7 0 1 2
After:  [0, 2, 0, 1]

Before: [1, 1, 2, 3]
11 3 2 2
After:  [1, 1, 6, 3]

Before: [1, 2, 2, 3]
9 0 3 3
After:  [1, 2, 2, 3]

Before: [2, 1, 3, 3]
9 1 3 3
After:  [2, 1, 3, 3]

Before: [0, 1, 3, 1]
5 1 3 3
After:  [0, 1, 3, 1]

Before: [0, 0, 2, 3]
7 0 1 1
After:  [0, 0, 2, 3]

Before: [0, 0, 2, 1]
7 0 2 0
After:  [0, 0, 2, 1]

Before: [0, 1, 0, 3]
1 3 1 1
After:  [0, 3, 0, 3]

Before: [3, 2, 3, 3]
14 2 1 3
After:  [3, 2, 3, 2]

Before: [1, 1, 0, 3]
4 1 0 1
After:  [1, 1, 0, 3]

Before: [0, 1, 1, 1]
5 1 3 3
After:  [0, 1, 1, 1]

Before: [3, 1, 3, 1]
8 3 3 2
After:  [3, 1, 1, 1]

Before: [1, 1, 1, 0]
4 1 0 1
After:  [1, 1, 1, 0]

Before: [1, 2, 2, 3]
15 0 2 0
After:  [3, 2, 2, 3]

Before: [3, 0, 2, 3]
1 3 1 3
After:  [3, 0, 2, 3]

Before: [0, 2, 0, 3]
3 0 0 2
After:  [0, 2, 0, 3]

Before: [2, 3, 0, 3]
15 2 3 2
After:  [2, 3, 3, 3]

Before: [1, 1, 1, 1]
5 1 3 2
After:  [1, 1, 1, 1]

Before: [1, 1, 1, 1]
13 2 3 1
After:  [1, 3, 1, 1]

Before: [2, 2, 2, 1]
15 2 2 3
After:  [2, 2, 2, 4]

Before: [0, 1, 3, 0]
12 2 2 1
After:  [0, 2, 3, 0]

Before: [1, 2, 1, 2]
10 0 3 0
After:  [3, 2, 1, 2]

Before: [1, 0, 3, 1]
12 2 2 0
After:  [2, 0, 3, 1]

Before: [3, 2, 0, 3]
15 2 3 1
After:  [3, 3, 0, 3]

Before: [0, 2, 2, 1]
8 3 3 1
After:  [0, 1, 2, 1]

Before: [2, 2, 1, 3]
9 2 3 1
After:  [2, 3, 1, 3]

Before: [0, 0, 2, 2]
15 2 2 1
After:  [0, 4, 2, 2]

Before: [3, 1, 1, 1]
5 1 3 1
After:  [3, 1, 1, 1]

Before: [1, 1, 3, 1]
5 1 3 2
After:  [1, 1, 1, 1]

Before: [0, 1, 1, 3]
15 0 1 3
After:  [0, 1, 1, 1]

Before: [2, 1, 2, 0]
1 2 0 1
After:  [2, 2, 2, 0]

Before: [0, 1, 1, 0]
3 0 0 1
After:  [0, 0, 1, 0]

Before: [1, 1, 1, 3]
9 2 3 1
After:  [1, 3, 1, 3]

Before: [3, 2, 1, 3]
1 3 3 2
After:  [3, 2, 3, 3]

Before: [0, 1, 2, 3]
7 0 1 1
After:  [0, 0, 2, 3]

Before: [1, 2, 0, 3]
9 0 3 3
After:  [1, 2, 0, 3]

Before: [1, 1, 1, 1]
8 2 3 2
After:  [1, 1, 1, 1]

Before: [0, 0, 1, 1]
13 2 3 2
After:  [0, 0, 3, 1]

Before: [2, 2, 3, 3]
14 2 1 0
After:  [2, 2, 3, 3]

Before: [3, 2, 0, 3]
11 0 3 1
After:  [3, 9, 0, 3]

Before: [0, 1, 1, 2]
10 2 3 2
After:  [0, 1, 3, 2]

Before: [0, 3, 0, 3]
3 0 0 2
After:  [0, 3, 0, 3]

Before: [1, 3, 3, 0]
13 0 3 1
After:  [1, 3, 3, 0]

Before: [1, 3, 1, 1]
13 2 3 1
After:  [1, 3, 1, 1]

Before: [1, 1, 0, 3]
0 2 1 1
After:  [1, 1, 0, 3]

Before: [2, 1, 3, 1]
5 1 3 2
After:  [2, 1, 1, 1]

Before: [0, 1, 0, 3]
1 3 1 0
After:  [3, 1, 0, 3]

Before: [3, 2, 3, 2]
2 1 3 2
After:  [3, 2, 3, 2]

Before: [0, 1, 3, 3]
11 3 3 3
After:  [0, 1, 3, 9]

Before: [1, 1, 0, 2]
6 3 1 1
After:  [1, 3, 0, 2]

Before: [1, 1, 3, 1]
4 1 0 1
After:  [1, 1, 3, 1]

Before: [2, 1, 0, 2]
6 3 1 0
After:  [3, 1, 0, 2]

Before: [0, 0, 2, 3]
1 3 0 2
After:  [0, 0, 3, 3]

Before: [1, 2, 2, 0]
2 2 3 3
After:  [1, 2, 2, 3]

Before: [1, 1, 1, 1]
5 1 3 3
After:  [1, 1, 1, 1]

Before: [3, 2, 2, 0]
14 0 2 2
After:  [3, 2, 2, 0]

Before: [1, 2, 1, 2]
10 2 3 3
After:  [1, 2, 1, 3]

Before: [0, 1, 1, 1]
5 1 3 1
After:  [0, 1, 1, 1]

Before: [3, 2, 2, 0]
15 3 2 3
After:  [3, 2, 2, 2]

Before: [3, 0, 2, 0]
11 0 2 2
After:  [3, 0, 6, 0]

Before: [1, 0, 0, 1]
13 0 3 1
After:  [1, 3, 0, 1]

Before: [0, 1, 3, 3]
9 1 3 3
After:  [0, 1, 3, 3]

Before: [0, 0, 2, 3]
11 2 3 0
After:  [6, 0, 2, 3]

Before: [3, 3, 3, 3]
1 3 0 1
After:  [3, 3, 3, 3]

Before: [2, 3, 1, 0]
13 2 3 3
After:  [2, 3, 1, 3]';

$puzzleInputPartTwo = '6 1 3 1
6 2 3 2
6 1 2 0
1 0 2 1
13 1 3 1
10 1 3 3
6 1 2 2
6 1 1 1
10 1 0 0
13 0 1 0
10 0 3 3
1 3 2 1
6 3 2 2
6 3 0 0
6 3 1 3
12 0 2 3
13 3 3 3
10 1 3 1
1 1 1 0
6 0 3 1
13 0 0 2
15 2 0 2
6 0 3 3
6 3 2 2
13 2 1 2
13 2 3 2
10 0 2 0
1 0 2 3
13 0 0 0
15 0 2 0
6 3 1 1
6 3 3 2
7 0 2 2
13 2 2 2
10 3 2 3
1 3 2 0
6 2 2 1
6 2 0 2
6 0 0 3
0 3 2 1
13 1 3 1
13 1 1 1
10 0 1 0
1 0 3 3
13 3 0 2
15 2 3 2
13 0 0 0
15 0 3 0
6 0 0 1
12 0 2 1
13 1 3 1
10 1 3 3
1 3 2 1
6 2 1 2
6 0 3 3
6 1 0 0
1 0 2 0
13 0 1 0
13 0 1 0
10 0 1 1
6 3 2 0
13 1 0 3
15 3 1 3
9 2 0 3
13 3 1 3
13 3 2 3
10 1 3 1
1 1 0 2
13 1 0 0
15 0 1 0
6 3 3 1
6 2 3 3
15 0 1 0
13 0 3 0
10 0 2 2
1 2 1 1
6 0 0 0
6 3 2 2
6 2 0 2
13 2 1 2
13 2 3 2
10 2 1 1
6 1 2 2
6 2 0 0
8 0 3 0
13 0 2 0
10 0 1 1
6 3 3 2
6 2 2 0
8 0 3 3
13 3 2 3
10 1 3 1
1 1 3 0
6 3 3 1
6 1 3 3
13 3 2 1
13 1 3 1
10 0 1 0
1 0 2 1
13 1 0 2
15 2 2 2
6 1 1 0
6 3 2 3
1 0 2 0
13 0 3 0
10 1 0 1
1 1 2 3
6 3 2 1
6 2 1 0
6 3 0 2
7 0 2 0
13 0 3 0
10 0 3 3
1 3 0 2
6 2 2 0
13 0 0 3
15 3 2 3
13 1 0 1
15 1 1 1
8 0 3 1
13 1 1 1
10 2 1 2
1 2 0 1
13 2 0 3
15 3 0 3
13 3 0 0
15 0 1 0
6 3 0 2
5 3 2 2
13 2 1 2
13 2 3 2
10 1 2 1
6 3 2 3
13 1 0 0
15 0 2 0
6 3 0 2
14 3 0 2
13 2 2 2
13 2 3 2
10 1 2 1
1 1 2 2
6 2 0 1
6 2 3 3
6 3 0 3
13 3 2 3
10 3 2 2
1 2 2 3
6 2 0 2
13 3 0 1
15 1 3 1
14 1 0 0
13 0 2 0
10 0 3 3
1 3 1 1
6 0 3 3
6 3 2 0
6 0 0 2
7 2 0 3
13 3 1 3
10 1 3 1
6 2 1 3
12 0 2 0
13 0 1 0
10 1 0 1
1 1 2 3
6 2 1 2
6 1 3 0
13 0 0 1
15 1 0 1
1 0 2 2
13 2 3 2
13 2 2 2
10 3 2 3
6 3 1 2
15 0 1 2
13 2 2 2
13 2 1 2
10 3 2 3
1 3 1 0
6 1 0 1
13 3 0 3
15 3 1 3
13 3 0 2
15 2 0 2
13 1 2 1
13 1 2 1
10 0 1 0
1 0 2 1
13 2 0 2
15 2 3 2
6 2 0 3
6 2 3 0
8 0 3 0
13 0 3 0
13 0 1 0
10 1 0 1
13 0 0 2
15 2 2 2
6 1 3 0
1 0 2 3
13 3 2 3
13 3 2 3
10 3 1 1
6 0 1 0
6 0 3 3
0 3 2 0
13 0 2 0
13 0 1 0
10 0 1 1
6 2 1 0
6 2 2 3
8 0 3 0
13 0 1 0
13 0 2 0
10 0 1 1
1 1 3 3
6 3 3 2
13 1 0 0
15 0 1 0
6 2 1 1
9 1 2 0
13 0 1 0
10 0 3 3
1 3 1 2
6 2 1 0
13 1 0 1
15 1 0 1
6 3 1 3
14 3 0 3
13 3 2 3
10 3 2 2
1 2 1 0
13 0 0 3
15 3 2 3
6 1 3 1
6 3 0 2
11 1 3 1
13 1 1 1
10 0 1 0
6 1 3 2
6 0 0 3
6 3 2 1
12 1 2 1
13 1 2 1
10 1 0 0
6 3 1 1
6 1 2 3
6 2 2 2
15 3 1 3
13 3 3 3
13 3 3 3
10 3 0 0
1 0 0 1
6 0 3 0
6 2 1 3
2 2 3 2
13 2 3 2
13 2 2 2
10 1 2 1
1 1 2 0
6 2 3 2
6 0 1 3
6 3 3 1
0 3 2 2
13 2 2 2
13 2 3 2
10 0 2 0
1 0 2 1
6 3 0 0
6 2 2 3
6 0 3 2
7 2 0 0
13 0 3 0
13 0 2 0
10 0 1 1
13 1 0 0
15 0 1 0
6 3 0 2
11 0 3 2
13 2 1 2
13 2 1 2
10 2 1 1
1 1 2 2
6 0 1 1
6 3 1 3
15 0 1 3
13 3 3 3
13 3 3 3
10 3 2 2
1 2 0 3
6 2 0 1
13 1 0 0
15 0 3 0
13 0 0 2
15 2 2 2
4 2 0 0
13 0 2 0
13 0 2 0
10 0 3 3
1 3 1 1
6 1 2 3
13 3 0 0
15 0 1 0
1 0 2 2
13 2 2 2
10 2 1 1
6 3 2 2
6 3 2 0
6 3 0 3
12 3 2 0
13 0 1 0
13 0 2 0
10 1 0 1
1 1 1 0
6 0 1 2
6 2 2 3
6 0 1 1
5 2 3 2
13 2 3 2
10 0 2 0
1 0 2 2
13 0 0 1
15 1 1 1
6 1 2 0
11 0 3 3
13 3 3 3
13 3 3 3
10 2 3 2
1 2 0 0
6 3 3 1
6 3 3 2
6 2 1 3
14 1 3 2
13 2 1 2
10 0 2 0
1 0 0 3
6 1 2 1
6 3 1 2
13 1 0 0
15 0 0 0
13 1 2 2
13 2 3 2
10 3 2 3
1 3 0 1
6 1 2 3
6 2 2 0
6 0 2 2
3 0 3 0
13 0 2 0
13 0 3 0
10 0 1 1
1 1 3 3
6 2 2 0
13 3 0 1
15 1 1 1
11 1 0 2
13 2 3 2
10 2 3 3
1 3 0 2
6 0 2 0
13 2 0 3
15 3 3 3
13 2 0 1
15 1 2 1
14 3 1 3
13 3 3 3
13 3 2 3
10 2 3 2
1 2 0 0
6 0 3 3
6 3 1 1
6 2 0 2
2 2 3 2
13 2 2 2
10 2 0 0
1 0 2 1
6 3 2 0
13 0 0 2
15 2 2 2
0 3 2 0
13 0 1 0
10 0 1 1
1 1 0 3
6 0 2 1
6 0 0 2
6 1 3 0
10 0 0 1
13 1 2 1
10 1 3 3
6 0 1 1
13 0 0 0
15 0 3 0
7 2 0 0
13 0 2 0
10 0 3 3
1 3 2 1
6 2 2 0
6 0 0 3
6 3 1 2
7 0 2 3
13 3 2 3
13 3 1 3
10 3 1 1
6 2 0 3
13 1 0 2
15 2 2 2
6 1 3 0
1 0 2 0
13 0 1 0
13 0 1 0
10 0 1 1
1 1 0 2
13 1 0 0
15 0 2 0
6 3 2 3
6 3 0 1
14 3 0 1
13 1 3 1
10 1 2 2
1 2 0 1
6 2 1 3
6 1 1 2
8 0 3 2
13 2 1 2
10 2 1 1
6 2 1 2
6 3 3 0
6 3 3 3
4 2 0 2
13 2 1 2
10 1 2 1
1 1 1 2
6 1 0 3
6 2 3 1
9 1 0 1
13 1 2 1
10 2 1 2
6 1 3 1
6 2 3 3
6 2 1 0
2 0 3 3
13 3 3 3
10 2 3 2
1 2 1 1
6 3 2 0
6 2 0 2
13 3 0 3
15 3 3 3
9 2 0 0
13 0 2 0
10 0 1 1
1 1 2 2
6 2 2 0
6 0 1 3
6 3 2 1
14 1 0 0
13 0 1 0
10 2 0 2
13 2 0 0
15 0 1 0
13 0 0 1
15 1 2 1
2 1 3 0
13 0 3 0
10 2 0 2
6 3 2 1
6 2 2 0
6 2 3 3
14 1 0 0
13 0 3 0
13 0 3 0
10 0 2 2
1 2 1 0
13 2 0 2
15 2 2 2
6 0 2 3
0 3 2 1
13 1 3 1
10 0 1 0
1 0 3 3
6 0 1 1
6 1 1 0
1 0 2 0
13 0 3 0
10 0 3 3
1 3 3 0
6 1 0 3
6 1 0 1
6 3 2 2
13 1 2 1
13 1 1 1
10 1 0 0
1 0 0 1
6 0 2 0
6 1 1 2
6 2 3 3
6 2 0 0
13 0 1 0
13 0 2 0
10 1 0 1
1 1 1 0
6 1 2 1
6 3 0 2
13 2 0 3
15 3 0 3
13 1 2 1
13 1 3 1
13 1 1 1
10 0 1 0
1 0 3 1
6 3 3 0
12 0 2 0
13 0 3 0
13 0 2 0
10 0 1 1
1 1 0 3
6 3 1 1
6 2 0 0
7 0 2 1
13 1 2 1
10 1 3 3
6 1 0 2
13 2 0 0
15 0 1 0
6 0 1 1
15 0 1 0
13 0 2 0
13 0 3 0
10 0 3 3
1 3 3 1
6 0 2 2
6 1 1 0
6 0 0 3
10 0 0 2
13 2 3 2
10 1 2 1
1 1 2 3
6 3 0 2
6 0 1 1
15 0 1 0
13 0 3 0
10 0 3 3
1 3 3 1
13 3 0 0
15 0 2 0
13 0 0 3
15 3 1 3
6 2 1 2
3 0 3 2
13 2 2 2
13 2 2 2
10 1 2 1
6 1 1 0
13 0 0 3
15 3 0 3
6 3 2 2
5 3 2 3
13 3 1 3
13 3 2 3
10 1 3 1
6 1 0 2
6 2 1 0
6 1 1 3
3 0 3 3
13 3 1 3
10 1 3 1
6 0 2 3
6 2 2 2
6 1 2 0
0 3 2 0
13 0 2 0
10 1 0 1
1 1 3 0
6 2 1 1
0 3 2 3
13 3 2 3
10 0 3 0
1 0 2 1
6 2 3 0
6 0 0 3
0 3 2 2
13 2 3 2
10 2 1 1
1 1 0 2
6 1 3 1
6 3 1 0
13 0 1 0
10 0 2 2
1 2 3 1
6 3 1 2
6 2 3 3
6 2 0 0
9 0 2 0
13 0 1 0
10 0 1 1
1 1 1 3
6 3 2 0
13 1 0 2
15 2 0 2
13 0 0 1
15 1 1 1
7 2 0 2
13 2 1 2
13 2 1 2
10 2 3 3
6 3 1 1
13 0 0 0
15 0 2 0
6 0 1 2
12 1 2 2
13 2 2 2
10 3 2 3
1 3 2 1
6 1 2 2
6 1 3 0
6 2 0 3
10 0 0 2
13 2 1 2
13 2 1 2
10 2 1 1
6 1 1 3
13 1 0 0
15 0 2 0
13 1 0 2
15 2 2 2
11 3 0 0
13 0 3 0
13 0 2 0
10 1 0 1
13 3 0 2
15 2 0 2
6 3 2 0
6 3 3 3
12 0 2 2
13 2 2 2
13 2 1 2
10 2 1 1
1 1 3 2
6 2 3 3
6 2 2 1
2 1 3 3
13 3 2 3
10 2 3 2
1 2 2 3
6 1 3 1
6 2 1 2
6 1 1 0
1 0 2 2
13 2 1 2
10 3 2 3
6 3 0 0
6 3 3 1
6 3 0 2
12 1 2 1
13 1 2 1
10 3 1 3
6 0 1 0
6 2 2 1
9 1 2 1
13 1 3 1
10 1 3 3
1 3 0 1
6 0 2 3
13 2 0 2
15 2 0 2
6 3 0 0
12 0 2 3
13 3 2 3
13 3 2 3
10 3 1 1
1 1 1 3
6 3 3 1
7 2 0 1
13 1 1 1
13 1 3 1
10 1 3 3
1 3 2 0
6 0 2 3
6 1 0 1
13 1 2 2
13 2 2 2
10 2 0 0
6 1 3 3
6 3 2 1
6 3 3 2
13 3 2 3
13 3 3 3
10 0 3 0
1 0 0 1
13 3 0 3
15 3 0 3
13 0 0 2
15 2 2 2
6 2 2 0
0 3 2 3
13 3 2 3
10 3 1 1
1 1 1 0
6 1 1 3
13 3 0 2
15 2 3 2
6 3 2 1
13 3 2 2
13 2 3 2
10 2 0 0
1 0 1 1
6 3 2 3
6 1 3 2
6 0 0 0
12 3 2 3
13 3 1 3
10 1 3 1
1 1 1 3
13 0 0 1
15 1 1 1
6 2 1 2
6 1 3 0
1 0 2 0
13 0 2 0
10 0 3 3
1 3 3 0
6 0 3 3
6 3 1 1
4 2 1 1
13 1 1 1
10 1 0 0
1 0 0 3
6 2 1 1
6 3 2 0
13 2 0 2
15 2 0 2
7 2 0 0
13 0 3 0
13 0 1 0
10 0 3 3
1 3 2 1
6 0 1 0
6 0 3 3
6 2 1 2
0 3 2 3
13 3 2 3
10 1 3 1
6 1 2 3
6 3 1 0
4 2 0 0
13 0 1 0
13 0 1 0
10 0 1 1
1 1 0 3
6 2 0 0
6 3 1 2
13 1 0 1
15 1 0 1
9 0 2 0
13 0 2 0
10 3 0 3
1 3 0 2
13 3 0 0
15 0 2 0
6 1 1 3
15 3 1 0
13 0 1 0
10 2 0 2
1 2 3 0
6 2 1 3
6 0 0 2
6 1 1 1
11 1 3 2
13 2 2 2
10 0 2 0
1 0 3 2
6 0 2 0
6 0 0 3
6 3 1 0
13 0 2 0
10 0 2 2
1 2 3 3
6 3 0 2
13 0 0 0
15 0 2 0
7 0 2 0
13 0 1 0
13 0 3 0
10 3 0 3
1 3 3 2
6 1 0 0
6 2 2 3
11 1 3 3
13 3 3 3
10 3 2 2
1 2 3 1
6 1 1 3
13 0 0 0
15 0 2 0
6 2 3 2
3 0 3 0
13 0 3 0
10 0 1 1
13 2 0 3
15 3 2 3
6 3 3 0
6 0 1 2
5 2 3 0
13 0 2 0
10 1 0 1
1 1 1 3
6 3 1 2
6 3 0 1
6 2 1 0
4 0 1 2
13 2 1 2
10 3 2 3
1 3 2 0
6 0 3 2
6 0 1 1
6 2 2 3
5 2 3 1
13 1 3 1
10 1 0 0
1 0 3 1
13 1 0 2
15 2 1 2
6 2 0 0
13 3 0 3
15 3 3 3
14 3 0 3
13 3 3 3
13 3 3 3
10 1 3 1
1 1 0 2
6 1 0 3
6 1 2 1
3 0 3 1
13 1 3 1
10 1 2 2
1 2 0 1
6 3 1 2
6 0 0 3
5 3 2 2
13 2 1 2
10 1 2 1
1 1 2 0
13 1 0 1
15 1 2 1
6 2 3 2
0 3 2 2
13 2 3 2
10 0 2 0
1 0 1 1
13 3 0 0
15 0 1 0
6 2 2 2
6 1 3 3
1 0 2 0
13 0 1 0
10 1 0 1
1 1 0 3
6 2 2 1
13 1 0 0
15 0 3 0
6 1 1 2
6 2 0 1
13 1 1 1
10 3 1 3
1 3 3 0
6 3 1 2
6 1 0 1
6 2 3 3
13 1 2 3
13 3 2 3
13 3 3 3
10 3 0 0
1 0 3 1
6 1 0 0
6 3 3 3
6 1 1 2
12 3 2 0
13 0 1 0
13 0 2 0
10 0 1 1
1 1 2 2
6 3 0 0
13 0 0 1
15 1 2 1
6 1 1 3
9 1 0 3
13 3 1 3
10 2 3 2
1 2 2 0
6 0 2 2
6 0 0 1
6 1 1 3
10 3 3 1
13 1 2 1
10 0 1 0
1 0 0 1
6 1 1 0
6 2 0 2
6 3 1 3
1 0 2 3
13 3 2 3
10 3 1 1
1 1 2 0
13 3 0 1
15 1 3 1
6 1 0 3
13 1 0 2
15 2 3 2
15 3 1 2
13 2 3 2
10 2 0 0
1 0 2 2
6 1 3 0
10 0 0 1
13 1 2 1
10 2 1 2
1 2 2 1
13 0 0 2
15 2 3 2
6 3 3 0
13 3 2 0
13 0 3 0
10 1 0 1
1 1 0 0
6 0 3 3
13 1 0 1
15 1 0 1
5 3 2 1
13 1 2 1
10 0 1 0
1 0 0 2
13 1 0 1
15 1 2 1
13 1 0 3
15 3 3 3
6 2 1 0
14 3 1 0
13 0 3 0
10 0 2 2
1 2 0 0';


// OpCode, Input (A & B), Output (C)

// Before: [3, 2, 1, 1]
// 9 2 1 2
// After:  [3, 2, 2, 1]


/*$puzzleInput = 'Before: [1, 1, 1, 0]
4 1 0 0
After:  [1, 1, 1, 0]';
 * 
 */
 
 
 
$operations = array();
$opcodeNumberRelationship = array();
$puzzleSections = preg_split("#\n\s*\n#Uis", $puzzleInput);
// Using letters for the register, numbers for the operation
$opcodeCategories = array(  0 => array('name' => 'addr', 'operation' => 'C=A+B'),
                            1 => array('name' => 'addi', 'operation' => 'C=A+1'),
                            2 => array('name' => 'mulr', 'operation' => 'C=A*B'),
                            3 => array('name' => 'muli', 'operation' => 'C=A*1'),
                            4 => array('name' => 'banr', 'operation' => 'C=A&B'),
                            5 => array('name' => 'bani', 'operation' => 'C=A&1'),
                            6 => array('name' => 'borr', 'operation' => 'C=A|B'),
                            7 => array('name' => 'bori', 'operation' => 'C=A|1'),
                            8 => array('name' => 'setr', 'operation' => 'C=A'),
                            9 => array('name' => 'seti', 'operation' => 'C=0'),
                            10 => array('name' => 'gtir', 'operation' => 'C=(0>B) ? 1:0'),
                            11 => array('name' => 'gtri', 'operation' => 'C=(A>1) ? 1:0'),
                            12 => array('name' => 'gtrr', 'operation' => 'C=(A>B) ? 1:0'),
                            13 => array('name' => 'eqir', 'operation' => 'C=(0==B) ? 1:0'),
                            14 => array('name' => 'eqri', 'operation' => 'C=(A==1) ? 1:0'),
                            15 => array('name' => 'eqrr', 'operation' => 'C=(A==B) ? 1:0'));

$secondInput = explode("\n",$puzzleInputPartTwo);
$registerValues = array(0=>0,1=>0,2=>0,3=>0);
foreach($opcodeCategories as $opID => $opValue) {
    for($i=0;$i<16;$i++) {
        $opcodeCategories[$opID][$i]=0;
    }
}
 

// Split the information into operation array entries
foreach($puzzleSections as $operationID => $operationLines) {
    $operationActions = explode("\n",$operationLines);
    preg_match('#\[(.*?)\]#', $operationActions[0], $beforeNumbers);
    $beforeNumbers = str_replace('[','',$beforeNumbers);
    $beforeNumbers = str_replace(']','',$beforeNumbers);
    $operation = $operationActions[1];
    preg_match('#\[(.*?)\]#', $operationActions[2], $afterNumbers);
    $afterNumbers = str_replace('[','',$afterNumbers);
    $afterNumbers = str_replace(']','',$afterNumbers);
    
    $operations[] = array('registerStart' => $beforeNumbers[0], 'instruction' => $operation, 'registerEnd' => $afterNumbers[0], 'possibleOperatorCount' => 0);
 
}

foreach ($operations as $operationID => $operationValues) {
    $registerStart = $operationValues['registerStart'];
    $registerStartValues = explode(",",str_replace(' ','',$registerStart));
    $instruction = $operationValues['instruction'];
    $instructionValues = explode(" ",$instruction);    
    $registerEnd = $operationValues['registerEnd'];
    $registerEndValues = explode(",",str_replace(' ','',$registerEnd));
    $possibleOperationIterator = 0;
    
    // Register A,B,C,D = $registerStartValues[0],[1],[2],[3] & $registerEndValues[0],[1],[2],[3]
    // Values 0,1,2 = $instructionValues[1],[2],[3]
    // Opcode = $instructionValues[0]
    $operators = "";
    // OppCode - addr - C=A+B
    $testValue = $registerStartValues[$instructionValues[1]] + $registerStartValues[$instructionValues[2]];
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[0][$instructionValues[0]] = 1;
        $operators .= " addr";
    }    
    // OppCode - addi - C=A+1
    $testValue = $registerStartValues[$instructionValues[1]] + $instructionValues[2];
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[1][$instructionValues[0]] = 1;
        $operators .= " addi";
    }
    // OppCode - mulr - C=A*B
    $testValue = ($registerStartValues[$instructionValues[1]] * $registerStartValues[$instructionValues[2]]);
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[2][$instructionValues[0]] = 1;
        $operators .= " mulr";
    }
    // OppCode - muli - 'C=A*1
    $testValue = ($registerStartValues[$instructionValues[1]] * $instructionValues[2]);
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[3][$instructionValues[0]] = 1;
        $operators .= " muli";
    }
    // OppCode - banr - C=A&B
    $testValue = ($registerStartValues[$instructionValues[1]] & $registerStartValues[$instructionValues[2]]);
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[4][$instructionValues[0]] = 1;
        $operators .= " banr";
    }
    // OppCode - bani - C=A&1
    $testValue = ($registerStartValues[$instructionValues[1]] & $instructionValues[2]);
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[5][$instructionValues[0]] = 1;
        $operators .= " bani";
    }
    // OppCode - borr - C=A|B
    $testValue = ($registerStartValues[$instructionValues[1]] | $registerStartValues[$instructionValues[2]]);
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[6][$instructionValues[0]] = 1;
        $operators .= " borr";
    }
    // OppCode - bori - C=A|1
    $testValue = ($registerStartValues[$instructionValues[1]] | $instructionValues[2]);
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[7][$instructionValues[0]] = 1;
        $operators .= " bori";
    }
    // OppCode - setr - C=A
    $testValue = $registerStartValues[$instructionValues[1]];
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[8][$instructionValues[0]] = 1;
        $operators .= " addr";
    }
    // OppCode - seti - C=0
    $testValue = $instructionValues[1];
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[9][$instructionValues[0]] = 1;
        $operators .= " seti";
    }
    // OppCode - gtir - C=(0>B) ? 1:0
    $testValue = ($instructionValues[1]>$registerStartValues[$instructionValues[2]]) ? 1:0;
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[10][$instructionValues[0]] = 1;
        $operators .= " gtir";
    }
    // OppCode - gtri - C=(A>1) ? 1:0
    $testValue = ($registerStartValues[$instructionValues[1]]>$instructionValues[2]) ? 1:0;
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[11][$instructionValues[0]] = 1;
        $operators .= " gtri";
    }
    // OppCode - gtrr - C=(A>B) ? 1:0
    $testValue = ($registerStartValues[$instructionValues[1]]>$registerStartValues[$instructionValues[2]]) ? 1:0;
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[12][$instructionValues[0]] = 1;
        $operators .= " gtrr";
    }
    // OppCode - eqir - C=(0==B) ? 1:0
    $testValue = ($instructionValues[1]==$registerStartValues[$instructionValues[2]]) ? 1:0;
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[13][$instructionValues[0]] = 1;
        $operators .= " eqir";
    }
    // OppCode - eqri - C=(A==1) ? 1:0
    $testValue = ($registerStartValues[$instructionValues[1]]==$instructionValues[2]) ? 1:0;
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[14][$instructionValues[0]] = 1;
        $operators .= " eqri";
    }
    // OppCode - eqrr - C=(A==B) ? 1:0
    $testValue = ($registerStartValues[$instructionValues[1]]==$registerStartValues[$instructionValues[2]]) ? 1:0;
    if($registerEndValues[$instructionValues[3]]==$testValue) {
        $possibleOperationIterator++;
        $opcodeCategories[15][$instructionValues[0]] = 1;
        $operators .= " eqrr";
    }
    //echo $operators."<br>";
    $operations[$operationID]['possibleOperatorCount'] = $possibleOperationIterator;
    foreach($opcodeCategories as $opID => $opValue) {
            if(isset($opcodeCategories[$opID][$instructionValues[0]]) && $opcodeCategories[$opID][$instructionValues[0]]==0) {                
                unset($opcodeCategories[$opID][$instructionValues[0]]);
            } elseif(isset($opcodeCategories[$opID][$instructionValues[0]]) && $opcodeCategories[$opID][$instructionValues[0]]==1) { 
                $opcodeCategories[$opID][$instructionValues[0]] = 0;
            }
    }
    


}

while (list($opID, $opValue) = each($opcodeCategories)) {
    
    $itemCount = 0;
    $lastItemID=0;
    for($i=0;$i<16;$i++) {
        if(isset($opcodeCategories[$opID][$i])) {
            $itemCount++;
            $lastItemID = $i;
        }
    }
    if($itemCount==1) {
        // We've found the one place for this item. We need to remove it from all other arrays
        foreach($opcodeCategories as $opIDSecond => $opValueSecond) {
            if(isset($opcodeCategories[$opIDSecond][$lastItemID]) && $opIDSecond!=$opID) { 
                unset($opcodeCategories[$opIDSecond][$lastItemID]);
                reset($opcodeCategories);
            }
        }
       // echo "1 count for $itemCount on $lastItemID";
        
    }
    
    
           
}

foreach($opcodeCategories as $opID => $opValue) {
    $opValueKeys = array_keys($opValue);
    $opcodeCategories[$opID]['key'] = $opValueKeys[2];
}




// Second part!!!
echo "<br>Starting register values:<br>";
print_r($registerValues);
foreach ($secondInput as $operationID => $operationValues) {
    
    $instructionValues = explode(" ",$operationValues);  
    $opcode = $instructionValues[0];
    $inputA = $instructionValues[1];
    $inputB = $instructionValues[2];
    $outputC = $instructionValues[3];
    //echo "$opcode-$inputA-$inputB-$outputC<br>";
    //$registerValues
    if($opcode==10) {        
        // OppCode - addr - C=A+B
        $testValue = $registerValues[$inputA] + $registerValues[$inputB];
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode==15) {
        // OppCode - addi - C=A+1
        $testValue = $registerValues[$inputA] + $inputB;
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode==11) {
        // OppCode - mulr - C=A*B
        $testValue = ($registerValues[$inputA] * $registerValues[$inputB]);
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode==13) {
        // OppCode - muli - 'C=A*1
        $testValue = ($registerValues[$inputA] * $inputB);
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode==14) {
        // OppCode - banr - C=A&B
        $testValue = ($registerValues[$inputA] & $registerValues[$inputB]);
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode==12) {
        // OppCode - bani - C=A&1
        $testValue = ($registerValues[$inputA] & $inputB);
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode==9) {
        // OppCode - borr - C=A|B
        $testValue = ($registerValues[$inputA] | $registerValues[$inputB]);
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode==2) {
        // OppCode - bori - C=A|1
        $testValue = ($registerValues[$inputA] | $inputB);
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode==1) {
        // OppCode - setr - C=A
        $testValue = $registerValues[$inputA];
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode==6) {
        // OppCode - seti - C=0
        $testValue = $inputA;
        $registerValues[$outputC] = $testValue;         
    } elseif($opcode==0) {
        // OppCode - gtir - C=(0>B) ? 1:0
        $testValue = ($inputA>$registerValues[$inputB]) ? 1:0;
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode==4) {
        // OppCode - gtri - C=(A>1) ? 1:0
        $testValue = ($registerValues[$inputA]>$inputB) ? 1:0;
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode==3) {
        // OppCode - gtrr - C=(A>B) ? 1:0
        $testValue = ($registerValues[$inputA]>$registerValues[$inputB]) ? 1:0;
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode==5) {
        // OppCode - eqir - C=(0==B) ? 1:0
        $testValue = ($inputA==$registerValues[$inputB]) ? 1:0;
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode==7) {
        // OppCode - eqri - C=(A==1) ? 1:0
        $testValue = ($registerValues[$inputA]==$inputB) ? 1:0;
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode==8) {
        // OppCode - eqrr - C=(A==B) ? 1:0
        $testValue = ($registerValues[$inputA]==$registerValues[$inputB]) ? 1:0;
        $registerValues[$outputC] = $testValue;  
    } else {
        echo "ERRORRR";
    }
    
    
}
echo "<br><br>Final register values:<br>";
print_r($registerValues);






$var = print_r($opcodeCategories,true);
echo "<pre>$var</pre>"; 
$operationsWithAbove3PossibleOperators = 0;
foreach ($operations as $operationID => $operationValues) {
    
    if($operationValues['possibleOperatorCount']>2) {
        $operationsWithAbove3PossibleOperators++;
    }
    
}

echo "Operations that behave like 3 or more operators = $operationsWithAbove3PossibleOperators<br>";

$var = print_r($operations,true);
echo "<pre>$var</pre>";  