#include <stdio.h>
int main()
{
	char name[20],buy[20],you[20],hoodies[20],vests[20],tees[20];
	printf("Hello, what is your name?--->");
	scanf("%s",name);
	printf("Hello %s,what would you be copping from us today?\n",name);
	printf("Hoodies, Vests or Tee's?--->");
	scanf("%s",buy);
	

return(0);
}

$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ss"
                        $username,
                        $password);

mysqli_stmt_execute($stmt);
