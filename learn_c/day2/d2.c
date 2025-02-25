#include <unistd.h>

void	ft_putchar(char c)
{
	write(1, &c, 1);
}

void	ft_putnbr(long nbr)
{
	if(nbr < 0)
	{
		nbr = -nbr;
		ft_putchar('-');
	}
	if(nbr >= 10)
		ft_putnbr(nbr / 10);
	ft_putchar(nbr % 10 + '0');
}

int	checkprime(int n)
{
	if(n <= 0 || n == 1 || n == 2)
		return (1);
	int	i = 2;
	while (i < n)
	{
		if (n % i == 0)
			return (0);
		i++;
	}
	return (1);
}

void	printprime(int	n)
{
	int i;
	int o;
	int t;

	i = 0;
	o = 0;
	t = 0;
	while(i < n)
	{
		if(checkprime(i) == 1)
		{
			ft_putnbr(i);
			ft_putchar('\n');
		}
		i++;
	}
}

int main(int argc, char *argv[])
{
    if (argc != 2)  // Check if exactly one argument is provided
    {
        write(1, "Invalid number of arguments\n", 27);
        return (1);
    }
    
    // Convert argv[1] (string) to integer
    int num = 0;
    int i = 0;
    while (argv[1][i] >= '0' && argv[1][i] <= '9')
    {
        num = num * 10 + (argv[1][i] - '0');
        i++;
    }
    
    printprime(num);
    return (0);
}
