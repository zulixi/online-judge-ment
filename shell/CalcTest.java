import static org.junit.jupiter.api.Assertions.*;

class CalcTest {

    @org.junit.jupiter.api.Test
    void sum() {
        assertEquals(Calc.sum(1,2),3);
        assertEquals(Calc.sum(2,5),7);
        assertEquals(Calc.sum(Integer.MAX_VALUE,0),Integer.MAX_VALUE);
        assertEquals(Calc.sum(Integer.MAX_VALUE/2,100), Integer.MAX_VALUE/2+100);
    }

    @org.junit.jupiter.api.Test
    void div() {
        assertThrows(ArithmeticException.class,() -> Calc.div(2,0));
        assertEquals(Calc.div(10,2),5);
    }

    @org.junit.jupiter.api.Test
    void multi() {
        assertEquals(Calc.multi(10,10),100);
        assertEquals(Calc.multi(24080,24280),584662400);
    }
}
