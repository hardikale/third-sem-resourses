import java.util.*;
public class greater{

    public static void main(String[] agrs){
        int a,b,c;
        Scanner sc=new Scanner (System.in);
        System.out.println("enter first number");
        a=sc.nextInt();
        System.out.println("enter second number");
        b=sc.nextInt();
        System.out.println("enter third number");
        c=sc.nextInt();

        if(a>b && a>c)
        System.out.println("Greater = "+a);
        else if(b>c)
        System.out.println("Greater = "+b);
        else
        System.out.println("Greater = "+c);
        
    }
}