class Darts{

    private final double x;
    private final double y;

    // constructor
    Darts(double x, double y) {
        this.x = x;
        this.y = y;
    }

    // function helps fetch the score
    public int score(){

        double d = Math.sqrt(x * x + y * y);

        int score = 0;

        if ( d > 5 && d <= 10){
            score = 1;
        }else if(d > 5 && d <= 5.0){
            score =  5;
        }else if(d <= 1){
            score = 10;
        }else{
            score = 0;
        }

        return score;
    }
}
