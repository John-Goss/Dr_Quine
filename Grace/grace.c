#include <stdio.h>
#include <stdlib.h>
#define FIRSTDEFINE 0
#define SECONDDEFINE 1
/*
 * Comment
 */
#define FT(x) int main(){FILE *txt;txt = fopen("Grace_kid.c", "w+");char *a="#include <stdio.h>%c#include <stdlib.h>%c#define FIRSTDEFINE 0%c#define SECONDDEFINE 1%c/*%c * Comment%c */%c#define FT(x) int main(){FILE *txt;txt = fopen(%cGrace_kid.c%c, %cw+%c);char *a=%c%s%c;fprintf(txt,a, 10, 10, 10, 10, 10, 10, 10, 34, 34, 34, 34, 34, a, 34, 10, 10);}%cFT(x);%c";fprintf(txt,a, 10, 10, 10, 10, 10, 10, 10, 34, 34, 34, 34, 34, a, 34, 10, 10);}
FT(x);
