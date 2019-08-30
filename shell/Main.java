import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int n = scanner.nextInt();
        ArrayList<Integer> arrayList = new ArrayList<>();
        for (int i = 0; i < n; i++) {
            arrayList.add(scanner.nextInt());
        }
        int cnt = 0;
        for (int i = 1; i < n-1; i++) {
//            System.out.println("i-1:" + arrayList.get(i-1) + " i:" + arrayList.get(i) + " i+1:" + arrayList.get(i+1));
            if(arrayList.get(i-1) < arrayList.get(i) && arrayList.get(i) < arrayList.get(i+1) ||
                arrayList.get(i+1) < arrayList.get(i) && arrayList.get(i) < arrayList.get(i-1)) cnt++;
        }
        System.out.println(cnt);
    }
}

