import  java.util.*;
public class switchcase{
    public static void main(String[] args){
        Scanner sc = new Scanner(System.in);;
        int a;
        System.out.println("enter any number from 1 to 7:");
        a = sc.nextInt();
        switch(a){
            case 1:
                System.out.println("Sunday");
                break;
                case 2:
                System.out.println("monday");
                break;
                case 3:
                System.out.println("tuesday");
                break;
                case 4:
                System.out.println("wednesday");
                break;
                case 5:
                System.out.println("thursday");
                break;
                case 6:
                System.out.println("Friday");
                break;
                case 7:
                System.out.println("Saturday"); 
                break;     
        }
    }
}