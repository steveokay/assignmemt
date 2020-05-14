class Knapsack {

    public static void main(String args[]) {

        ComputeKnapsack compute = new ComputeKnapsack();

        int val[] = new int[] { 10,40,30,50 };  // arrays to carry values
        int wt[] = new int[] { 5,4,6,4 };   // arrays to carry weights

        int W = 10; // max number of weight that the thief can carry
        int n = val.length;

        // print the highest value of knapsack that the thief can carry
        System.out.println(compute.knapSack(W, wt, val, n));
    }
}
