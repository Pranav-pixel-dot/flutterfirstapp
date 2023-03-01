int main() 
{ 
       char girls_choice[15]; 
       printf("Hi Girl! I Love You\n"); 
       while(1) 
       { 
                 printf("Enter Your choice please: "); 
                 gets(girls_choice); 
 
                if(strcmp(girls_choice,"I Love You too")==0) 
                { 
                        printf("Thank you so much! Happy Now :)\n"); 
                        return 0; 
                } 
                else 
                { 
                       printf("Wrong choice :(\n"); 
                } 
 
       } 
} 