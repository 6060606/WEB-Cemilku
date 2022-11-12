class Node {
    int data;
    Node next;

   public Node(int data){
       this.data = data;
       this.next = null;
   }
}
public class CircularSingleLinkedList {
    Node head = null;
    Node tail = null;
    public Node hapusDiawal(){
        if(head == null){
            System.out.println("Data List Empty");
        }
        System.out.printf("%s %d %n","Data Awal Telah Terhapus ",head.data);
        head = head.next;
        tail.next = head;
        return head;
    }
    public Node hapusDiAkhir(){
        Node nodeSaatIni = head;
        if(head == null || tail == null){
            System.out.println("Data List Empty");
        } else{
            while(nodeSaatIni.next != tail) {
                nodeSaatIni = nodeSaatIni.next;
            }
            System.out.println(nodeSaatIni.data);
            System.out.println(nodeSaatIni.next.data);
            System.out.println(head.data);
            tail = head;
            nodeSaatIni.next = tail;
            System.out.println("Tail = " + tail.data);

        }
        return nodeSaatIni;
    }
    public Node deleteAtEnd(){
       Node currentNode = head;
        if(currentNode == null){
            System.out.println("Kosong");
        } else{
            while(currentNode.next != null){
                currentNode = currentNode.next;
            }
            currentNode.next =currentNode;
            currentNode = currentNode;
        }
        return currentNode;
    }

    public Node hapusTertentu(int afterData){
        Node nodeSaatIni = head;
        if(head == null ){
            System.out.println("Data List Empty");
        } else{
            while (nodeSaatIni != tail){
                if(nodeSaatIni.data == afterData){
                    System.out.printf("%s %d %s %d %n","Data Node Di Hapus Setelah ",nodeSaatIni.data,
                            "Data Yang Terhapus",nodeSaatIni.next.data);
                    Node setelahNode = nodeSaatIni.next.next;
                    nodeSaatIni.next = setelahNode;
                }
                nodeSaatIni = nodeSaatIni.next;
            }
        }
        return nodeSaatIni;
    }
    public Node tambahDataDiAkhir(int data){
        final Node nodeBaru = new Node(data);
        Node nodeSaatIni = head;
        if(head == null){
            head = nodeBaru;
            tail = nodeBaru;
        } else{
            while(nodeSaatIni != tail){
                nodeSaatIni = nodeSaatIni.next;
            }
            System.out.printf("%s %d %n","Menambahkan Data Di Akhir ",nodeBaru.data);
            nodeBaru.next = head;
                tail = nodeBaru;
                nodeSaatIni.next = nodeBaru;
            }
            return nodeSaatIni;
        }
        public Node tambahTertentu(int setelahNodeData, int data){
            Node nodeBaru = new Node(data);
            System.out.printf("%s %d %s %d%n","Data telah ditambahkan setelah ", 
            setelahNodeData ,"Data yang ditambahkan",data);
            if(head == null){
                head = nodeBaru;
                tail = nodeBaru;
            } else{
                Node nodeCurrent = head;
                while(nodeCurrent != tail){
                    if(nodeCurrent.data == setelahNodeData){
                        Node storeTemporaryNodeAfter = nodeCurrent.next;
                    nodeBaru.next = storeTemporaryNodeAfter;
                    nodeCurrent.next = nodeBaru;
                }
                nodeCurrent = nodeCurrent.next;
            }
            // end element
            if(nodeCurrent.data == setelahNodeData){
                nodeBaru.next = head;
                tail = nodeBaru;
                nodeCurrent.next = nodeBaru;

                return nodeCurrent;
            }
        }
        return  nodeBaru;
    }
    public Node tambahDataDiAwal(int data){
        System.out.printf("%s %d %n","Menambahkan Data Di Awal ",data);
        Node nodeBaru = new Node(data);
       if(head == null){
           head = nodeBaru;
           tail = nodeBaru;
       } else{
           tail.next = nodeBaru;
           head.next = tail;
           nodeBaru.next = head;
           head = nodeBaru;
       }
       return nodeBaru;
    }
    public void transversal( ){
        System.out.println("=========MENAMPILKAN DATA==========");
        if(head != null){
            Node nodeCurrent = head;
            while(nodeCurrent.next != tail){
                System.out.printf("%d -> ",nodeCurrent.data);
                nodeCurrent = nodeCurrent.next;
            }
            System.out.printf("%d" , nodeCurrent.data);
            System.out.printf("-> %d%n",nodeCurrent.next.data);
        }
        System.out.println("=======================================");
        System.out.println();

    }

    public static void main(String[] args) {
        CircularSingleLinkedList app = new CircularSingleLinkedList();
        app.tambahDataDiAwal(3);
        app.tambahDataDiAwal(2);
        app.tambahDataDiAwal(1);
        app.tambahDataDiAkhir(8);
        app.tambahTertentu(3,9);
        app.hapusDiawal();
        app.hapusDiAkhir();
        app.transversal();

    }
}