import com.sun.javafx.geom.BaseBounds;
import com.sun.javafx.geom.transform.BaseTransform;
import com.sun.javafx.jmx.MXNodeAlgorithm;
import com.sun.javafx.jmx.MXNodeAlgorithmContext;
import com.sun.javafx.sg.prism.NGNode;
import javafx.scene.Node;

public class DoubleLinkedListStack {
    Node head = null;
    int TOP = 0;
    class Node {
    int data;
    Node next;
        private Node prev;

   public Node(int data){
       this.data = data;
       this.next = null;
   }
    }
    public Node push(int newData){
        Node nodeBaru = new Node(newData) {
            protected NGNode impl_createPeer() {
                throw new UnsupportedOperationException("Not supported yet."); 
            }

            public BaseBounds impl_computeGeomBounds(BaseBounds bb, BaseTransform bt) {
                throw new UnsupportedOperationException("Not supported yet."); 
            }

            protected boolean impl_computeContains(double d, double d1) {
                throw new UnsupportedOperationException("Not supported yet."); 
            }

            public Object impl_processMXNode(MXNodeAlgorithm mxna, MXNodeAlgorithmContext mxnac) {
                throw new UnsupportedOperationException("Not supported yet."); 
            }
        };
        System.out.println("Menambahkan data " + newData + " Kedalam List dengan index Tumpukan [" + TOP +"]");
        if(head == null){
            head = nodeBaru;
        } else{
            nodeBaru.prev = head;
            head.next = nodeBaru;
            head = nodeBaru;
        }
        TOP++;
        return nodeBaru;
    }
    public boolean isEmpty(){
        return (TOP == 0 && TOP < 0) ? true : false;
    }
    public Node destroyNode(){
        head = null;
        return head;
    }
    public Node change(int positionNode , int newData){
        Node newNode = new Node(newData) {
            protected NGNode impl_createPeer() {
                throw new UnsupportedOperationException("Not supported yet."); 
            }

            public BaseBounds impl_computeGeomBounds(BaseBounds bb, BaseTransform bt) {
                throw new UnsupportedOperationException("Not supported yet."); 
            }

            protected boolean impl_computeContains(double d, double d1) {
                throw new UnsupportedOperationException("Not supported yet.");
            }

            public Object impl_processMXNode(MXNodeAlgorithm mxna, MXNodeAlgorithmContext mxnac) {
                throw new UnsupportedOperationException("Not supported yet."); 
            }
        };
        Node currentNode = head;
        if(positionNode > -1 && positionNode < TOP){
            for(int indx = TOP - 1; indx > -1;indx-- ){
                if(positionNode  == indx){
                    System.out.printf("Merubah data %d dengan data [%d] pada posisi %d%n", currentNode.data,newData,positionNode );
                    currentNode.data = newData;
                }
                currentNode= currentNode.prev;
            }
        } else{
            System.out.println("posisi index tidak ada");
        }
        return newNode;
    }
    public Node pop(){
        Node currentNode = head;
        for(int i = TOP - 1; i > -1; i--){
            if(i == TOP - 1){
                System.out.printf("Menghapus data %d, pada tumpukan[%d]%n",currentNode.data,i);
             currentNode = currentNode.prev;
            }
        }
        TOP--;
        if(TOP == 0){
            System.out.println("Node Kosong !" + TOP );
        }
        head = currentNode;
        return currentNode;
    }
    public void transversalNodeDisplay(){
        Node currentNode = head;
        for(int i = TOP - 1; i > -1; i--){
            if(i == 0){
                System.out.print(currentNode.data + "");
            } else{
                System.out.print(currentNode.data +",");
            }
            currentNode = currentNode.prev;
        }
        System.out.println();
    }
    public static void main(String[] args) {
        System.out.println("=========Kelompok B1=========");
        DoubleLinkedListStack stack = new DoubleLinkedListStack();
        stack.push(2);
        stack.push(3);
        stack.push(5);
        stack.change(0,1);
        stack.transversalNodeDisplay();
        stack.pop();
        stack.transversalNodeDisplay();
        
       
    }
}