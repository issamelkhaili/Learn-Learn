#include <unistd.h>

void	ft_putchar(char c)
{
	write(1, &c, 1);
}

char	*dectobin(int nbr)
{
	static char result[33];
	char temprev[33];
	int i;
	int z;

	i = 0;
	z = 0;
		while(nbr > 0)
		{
			temprev[i] = (nbr % 2) + '0';
			nbr = nbr / 2;
			i++;
		}
		temprev[i]='\0';
//		printf("%s",temprev);
		i--;
		while(i >= 0)
		{
			result[z] = temprev[i];
			i--;
			z++;
		}
		result[z] = '\0';
		return (result); 
}

int main()
{
    char *ptr = dectobin(111111100);
    
    while (*ptr)
    {
        write(1, ptr, 1);
        ptr++;
    }
    return (0);
}
