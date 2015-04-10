# clickbus
Cash Machine
O Problema

Desenvolva uma solução que simule a entrega de notas quando um cliente efetuar um saque em um caixa eletrônico.

Os requisitos básicos são os seguintes:

    Sempre entregar o menor número de notas possíveis;
    É possível sacar o valor solicitado com as notas disponíveis;
    Saldo do cliente é infinito;
    Quantidade de notas é infinito;
    Notas disponíveis de R$ 100,00; R$ 50,00; R$ 20,00 e R$ 10,00

Exemplos:

    Entrada: 30.00
    Resultado: [20.00, 10.00]

    Entrada: 80.00
    Resultado: [50.00, 20.00, 10.00]

    Entrada: 125.00
    Resultado: throw NoteUnavailableException

    Entrada: -130.00
    Resultado: throw InvalidArgumentException

    Entrada: NULL
    Resultado: [Empty Set]