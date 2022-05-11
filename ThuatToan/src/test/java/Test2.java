import java.util.Scanner;
public class Test2 {
    static void display(int[] a)
     {
        int max = 0;
        int [] b = new int[a.length]; // tao mang b co a.length phan tu = 0;
        for(int i = 0; i< a.length; i++ )
        {
            for(int j = 0; j<= i; j++ )
                if( a[i] == a[j]) b[i]++;
        }
        // tìm giá trị max
        max = b[0];
        for(int i= 1; i< a.length; i++ )
            if(b[i] > max) max = b[i]; // tim dc phan tu co so lan xuat hien max
        for(int i = 0; i< a.length; i++ )
            System.out.print(a[i] + " ");
            System.out.println("");
        for(int i = 0; i< a.length; i++ )
            if(b[i] == max) System.out.println("=> Phần tử " + a[i]+" xuất hiện nhiều nhất , có số lần xuất hiện là: "+max);
    }
    static void nhapmang()
    {
        int [] a;
        int n;
        Scanner sc = new Scanner(System.in);
        System.out.println("nhập số phần tử của mảng a[]: ");
        n = sc.nextInt();
        a = new int[n];
        for(int i = 0; i< n; i++)
        {
            System.out.println("nhập phần tử a["+i+"]: ");
            a[i] = sc.nextInt();
        }
        display(a);
    }
    public static void main(String[] args)
    {
        nhapmang();
    }
}
