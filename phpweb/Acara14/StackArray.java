public class StackArray{

   
    static int MAX = 5;
    static int TOP = 0;
    static int dataArray[] = new int[MAX];
    static void pushData(int newData){
        if(TOP == -1){
            TOP = 0;
        }

        if(TOP < MAX){

            dataArray[TOP] = newData;
            TOP++;
        } else if(TOP == MAX){
            System.out.printf("%s%n","Stack Penuh");
        }
    }

    static void pop(){
        if(TOP == MAX){
            TOP -= 1;
        }
        if(TOP == -1){
            System.out.println("Stack Kosong !");
        } else{ 
            System.out.printf("Menghapus data stack %d%n",dataArray[TOP]);
            dataArray[TOP] = 0;
            TOP--; 
        }
    }
    static void display(){
        for(int indexLast = MAX - 1; indexLast >= 0; indexLast--){
            if(indexLast == 0){
                System.out.printf("%d",dataArray[indexLast]);
            } else {
                System.out.printf("%d->",dataArray[indexLast]);
            }
        }
        System.out.println();
    }

    static void peek(int positionStack){
        if(positionStack >= 0 && positionStack <= MAX - 1){ 
            System.out.printf(" data stack %d di posisi index[%d]%n",dataArray[positionStack],positionStack); 
        } else{
            System.out.printf("%s%n","posisi index diluar dari jangkauan array"); 
        }
    }
    static boolean isEmpty(){
        if(TOP == 0){ 
            return true;
        }
        return false;
    }

    static boolean isFull(){
        if(TOP == MAX){
            return true;  
        }
        return false; 
    }
    static int count(){
        return TOP + 1; 
    }
  
    static void destroy(){
        dataArray = new int[MAX]; 
        System.out.println("DATA ARRAY DI BERSIHKAN");
    }

    static void change(int positionStack , int newData){

        if(positionStack >= 0 && positionStack < MAX){
            System.out.printf("Data stack berhasil di ubah dari %d ke %d%n",dataArray[positionStack],newData);
            dataArray[positionStack] = newData;
        } else{
            System.out.println("Perubahan gagal karena index diluar dari panjang data stack :v ");
        }
    }
    public static void main(String[] args) {
        System.out.println("=========Kelompok B1=========");
        pushData(3);
        pushData(7);
        pushData(8);
        pushData(9);
        pushData(10);
        pop();
        pop();
        pop();
        pushData(1);
        pushData(2);
        pushData(3);
        pushData(4);
        pushData(5);
        pop();
        pop();
        pop();
        change(2,10);
        display();
        destroy();
        display();
    }
}