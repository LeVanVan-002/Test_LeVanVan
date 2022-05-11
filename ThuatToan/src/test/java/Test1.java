
public class Test1 {
    //phương thức khởi tạo mảng  String[] args
    public static void main(String[] args)
     {
       //nhập các số nguyên bất kỳ vào mảng có tên là findMax5
          int [] findMax5= {3,4,5,3,2,3,10,11};//testcase mảng 1
       // int [] findMax5= {14,12,38,17,10,36,12,29,45,34,48,22};//mảng 2
       // int [] findMax5= {10,11,2,30,22,6,8,9,11,12,22};// mảng 3
          sortDESC(findMax5);
          System.out.println("5 số lớn nhất trong mảng là : ");
          show(findMax5);
    }
     public static void sortDESC(int [] findMax5)
     {
        int temp ;
        for (int i = 0 ; i < findMax5.length - 1; i++)
        {
            for (int j = i + 0; j < findMax5.length; j++)
            {
                if (findMax5[i] < findMax5[j])
                {
                    temp = findMax5[j];
                    findMax5[j] = findMax5[i];
                    findMax5[i] = temp;
                }
            }
        }
    }
    public static void show(int [] findMax5)
    {   //khời tạo biến tạm dem
        int dem=0;
        for (int i = 0; i < findMax5.length; i++)//dùng vòng lặp for khới tạo ,thực hiện đếm tăng
        {
            System.out.print( findMax5[i] + ",");//in ra màn hình và cách nhau phía sau bằng dấu ","
                dem++;
                if (dem==5) //dk lấy 5 phần tử lớn nhất ,lấy đến đủ 5 phần tử = false => thoát khỏi vòng lặp
            break ; //Break trong Java được sử dụng để ngắt vòng lặp
        }
    }
}
