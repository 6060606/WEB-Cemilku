public class StackArray {
    /*
    Stack Array
    Language : Java
     */
    //digunakan untuk mendefinisikan panjang data array stack
    static int MAX = 5;
    //digunakan untuk mendapatkan posisi terkini dari data stack
    static int TOP = 0;
    //digunakan untuk menyimpan data berupa stack array
    static int dataArray[] = new int[MAX];
    //digunakan untuk menambahkan data pada stack
    static void pushData(int newData){
        //digunakan untuk mengecek apakah data stack kosong
        if(TOP == -1){
            TOP = 0;
        }
        //jika posisi stack kurang dari max
        if(TOP < MAX){
            //maka data stack ditambahkan
            dataArray[TOP] = newData;
            //lalu posisi top ditambah 1
            TOP++;
        //lain jika posisi TOP == MAX
        } else if(TOP == MAX){
            //maka data stack penuh
            System.out.printf("%s%n","Stack Penuh");
        }
    }

    //method pop digunakan untuk menghapus data pada tumpukan terakhir
    static void pop(){
        //mengecek apakah posisi TOP = MAX
        if(TOP == MAX){
            //jika iya maka top di kurang 1 sehinga nilai TOP = MAX - 1;
            TOP -= 1;
        }
        //jika top bernilai -1 maka dipastikan data stack kosong
        if(TOP == -1){
            System.out.println("Stack Kosong !");
        } else{ // lain jika top bernilai lebih dari > -1 dan < MAX
            System.out.printf("Menghapus data stack %d%n",dataArray[TOP]);
            dataArray[TOP] = 0; // maka data pada poisisi stack di set menjadi 0
            TOP--; //digunakan untuk beralih index stack setelah di hapus
        }
    }//method yang digunakan untuk menampilkan keselurahan data pada array stack secara descending
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
    //digunakan untuk menampilkan data stack pada index tertentu
    static void peek(int positionStack){
        if(positionStack >= 0 && positionStack <= MAX - 1){ // jika posisi stack berada di jangkauan >= 0 && <=MAX -1
            System.out.printf(" data stack %d di posisi index[%d]%n",dataArray[positionStack],positionStack); // maka data stack yang di cari di tampilkan
        } else{
            System.out.printf("%s%n","posisi index diluar dari jangkauan array"); // jika posisi index berada di luar jangkauan maka data stack yang di cari tidak ditemukan
        }
    }
    //digunakan untuk mengecek apakah data array stack kosong
    static boolean isEmpty(){
        if(TOP == 0){ //jika posisi stack == 0 maka data kosong
            return true;
        }
        return false;//jika posisi stack != 0 maka data tidak kosng
    }
    //digunakan untuk mengecek apakah data array full
    static boolean isFull(){
        if(TOP == MAX){//jika posisi stack sama dengan max
            return true;  //maka dapat dipastikan bahwa data array stack penuh
        }
        return false; //sebaliknya tidak
    }
    //digunakan untuk mendapatkan panjang data dari stack
    static int count(){
        return TOP + 1; // jika index stack = 2 maka panjang data 3 karena index dimulai dari 0 , 1 , 2 = 3
    }
    //digunakan untuk menghapus seluruh data stack pada sebuah array
    static void destroy(){
        dataArray = new int[MAX]; //mendefinisikan array baru dengan size baru secara otomatis semua element yang ada pada array tersebut bernilai 0.
        System.out.println("DATA ARRAY DI BERSIHKAN");
    }
    //digunakan untuk merubah data stack pada posisi tertentu.
    static void change(int positionStack , int newData){
        //jika posisi stack >= 0 && posisiStack < MAX maka perubahan data stack pada posisi tertentu bisa di lakukan
        if(positionStack >= 0 && positionStack < MAX){
            System.out.printf("Data stack berhasil di ubah dari %d ke %d%n",dataArray[positionStack],newData);
            dataArray[positionStack] = newData;
        } else{
            System.out.println("Perubahan gagal karena index diluar dari panjang data stack :v ");
        }
    }
    public static void main(String[] args) {
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
        System.out.println("Kelompok B1 ");
    }
}
