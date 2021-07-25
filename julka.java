import java.util.Scanner;
import java.math.BigInteger;
 class julka {
  public static void main(String[] args) {
    int t;
    BigInteger n,k,x,N;
    Scanner in = new Scanner(System.in);
    t = 10;
    while(t--!=0)
    {
    N = in.nextBigInteger();
    x = in.nextBigInteger();
    n = N.subtract(x);
    n = n.divide(BigInteger.valueOf(2));
    k = N.add(x).divide(BigInteger.valueOf(2));

    System.out.println(k);
    System.out.println(n);
    }
    in.close();
  }
}
